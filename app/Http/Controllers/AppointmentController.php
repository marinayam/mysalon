<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\AppointmentSendmail;
use Carbon\Carbon;
use Storage;
use App\Appointment;
use App\Perm;
use App\Extension;
use App\Eyebrow;
use App\Option;
use App\User;


class AppointmentController extends Controller
{
    public function add()
    {
        $appointments=Appointment::all();
        $perms=Perm::all();
        $extensions=Extension::all();
        $eyebrows=Eyebrow::all();
        $options=Option::all();
        return view ('appointment.create', ['appointments'=>$appointments,'perms'=>$perms,'extensions'=>$extensions,'eyebrows'=>$eyebrows,'options'=>$options]);
    }
    
     public function create(Request $request)
    {
        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        
        if (isset($appointment_form['perm'])){
            $perms = Perm::whereIn('id', $appointment_form['perm'])->get();
        } else{
            $perms = [];
        }
        
        if (isset($appointment_form['extension'])){
            $extensions = Extension::whereIn('id', $appointment_form['extension'])->get();
        } else{
            $extensions = [];
        }
        
        if (isset($appointment_form['eyebrow'])){
            $eyebrows = Eyebrow::whereIn('id', $appointment_form['eyebrow'])->get();
        } else{
            $eyebrows =  [];
        }
        
        if (isset($appointment_form['option'])){
            $options = Option::whereIn('id', $appointment_form['option'])->get();
        } else{
            $options =  [];
        }
        unset($appointment_form['_token']);
        unset($appointment_form['perm']);
        unset($appointment_form['extension']);
        unset($appointment_form['eyebrow']);
        unset($appointment_form['option']);
        unset($appointment_form['action']);
        $appointment->fill($appointment_form);
        $appointment->save();
        $appointment->perms()->attach($perms);
        $appointment->extensions()->attach($extensions);
        $appointment->eyebrows()->attach($eyebrows);
        $appointment->options()->attach($options);
            
    }
    
    public function confirm(Request $request)
    {
        $this->validate($request, Appointment::$rules);
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name01' => 'required',
            'name02' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'date' => 'required',
            'time' => 'required',
            ]);
        
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();
        if (isset($inputs['perm'])){
            $perms = Perm::whereIn('id', $inputs['perm'])->get();
        } else{
            $perms = [];
        }
        
        if (isset($inputs['extension'])){
            $extensions = Extension::whereIn('id', $inputs['extension'])->get();
        } else{
            $extensions = [];
        }
        
        if (isset($inputs['eyebrow'])){
            $eyebrows = Eyebrow::whereIn('id', $inputs['eyebrow'])->get();
        } else{
            $eyebrows =  [];
        }
        
        if (isset($inputs['option'])){
            $options = Option::whereIn('id', $inputs['option'])->get();
        } else{
            $options =  [];
        }
        
        //入力内容確認ページのviewに変数を渡して表示
        return view('appointment.confirm', [
            'inputs' => $inputs,
            'perms' => $perms,
            'extensions' => $extensions,
            'eyebrows' => $eyebrows,
            'options' => $options,
        ]);
    }
    
   
    
    public function send(Request $request)
    {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name01' => 'required',
            'name02' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        
        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');
        
        if($action !== 'submit'){
            // dd($inputs);
            return redirect()
                ->route('appointment.create')
                ->withInput($inputs);

        }
        // バリデーションとモデルに保存
        $this->validate($request, Appointment::$rules);
        $appointment = new Appointment;
        $appointment_form = $request->all();
        
        if (isset($appointment_form['perm'])){
            $perms = $appointment_form['perm'];
            unset($appointment_form['perm']);
        } else{
            $perms = [];
        }
         if (isset($appointment_form['extension'])){
            $extensions = $appointment_form['extension'];
            unset($appointment_form['extension']);
        } else{
            $extensions = [];
        }
         if (isset($appointment_form['eyebrow'])){
            $eyebrows = $appointment_form['eyebrow'];
            unset($appointment_form['eyebrow']);
        } else{
            $eyebrows = [];
        }
         if (isset($appointment_form['option'])){
            $options = $appointment_form['option'];
            unset($appointment_form['option']);
        } else{
            $options= [];
        }
        unset($appointment_form['_token']);
        unset($appointment_form['action']);
        $appointment->fill($appointment_form);
        $appointment->save();
        $appointment->perms()->attach($perms);
        $appointment->extensions()->attach($extensions);
        $appointment->eyebrows()->attach($eyebrows);
        $appointment->options()->attach($options);

        //再送信を防ぐためにトークンを再発行
        $request->session()->regenerateToken();
        
        // パーマメニュー
        $str = '';
        if (isset($inputs['perm'])){
            $perms = Perm::whereIn('id', $inputs['perm'])->get();
            $i = 0;
            foreach($perms as $item) {
              if($i > 0) {
                $str .= '、';
              }
              $str .= $item->perm;
              $i++;
            }
        } 
        $inputs['perm'] = $str;
        // パーマメニュー
        // マツエクメニュー
        $str = '';
        if (isset($inputs['extension'])){
            $extensions = Extension::whereIn('id', $inputs['extension'])->get();
            $i = 0;
            foreach($extensions as $item) {
              if($i > 0) {
                $str .= '、';
              }
              $str .= $item->extension;
              $i++;
            }
        } 
        $inputs['extension'] = $str;
         // マツエクメニュー
        //  眉メニュー
        $str = '';
        if (isset($inputs['eyebrow'])){
            $eyebrows = Eyebrow::whereIn('id', $inputs['eyebrow'])->get();
            $i = 0;
            foreach($eyebrows as $item) {
              if($i > 0) {
                $str .= '、';
              }
              $str .= $item->eyebrow;
              $i++;
            }
        } 
        $inputs['eyebrow'] = $str;
        //  眉メニュー
        // オプションメニュー
        $str = '';
        if (isset($inputs['option'])){
            $options = Option::whereIn('id', $inputs['option'])->get();
            $i = 0;
            foreach($options as $item) {
              if($i > 0) {
                $str .= '、';
              }
              $str .= $item->option;
              $i++;
            }
        $inputs['option'] = $str;
        } 
        // オプションメニュー
        
        //actionの値で分岐
        
        //入力されたメールアドレスにメールを送信
        \Mail::to($inputs['email'])->send(new AppointmentSendmail($inputs));

        //再送信を防ぐためにトークンを再発行
        $request->session()->regenerateToken();

        //送信完了ページのviewを表示
        return view('appointment.send');
            
        
    }
}