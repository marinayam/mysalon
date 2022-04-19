<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appointment;
use App\Perm;
use App\Extension;
use App\Eyebrow;
use App\Option;
use App\User;

class AppointmentController extends Controller
{
    //一覧を表示させる
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
        $cond_date = $request->cond_date;
        $user_id = $request->user_id;
      
      $username = null;
      if ($user_id) {
        $username = User::find($user_id)->kanji_name;
        $appointments = Appointment::where('user_id', $user_id)->get();
      } elseif ($cond_name != '') {
          // 検索されたら検索結果を取得する
          $appointments = Appointment::where('hira_name', $cond_name)->get();
          
      }elseif($cond_date != ''){
          $appointments = Appointment::where('date', $cond_date)->get();
      }else {
          // それ以外はすべてを取得する
          $appointments = Appointment::all();
      }
      
      return view('admin.appointment.index', compact(['appointments', 'cond_name', 'cond_date', 'username']));
    }
    
    //クライエント情報の詳細を表示させる
    public function detail(Request $request)
    {
        // appointment Modelからデータを取得する
        $appointment= Appointment::find($request->id);
        if (empty($appointment)) {
            abort(404);    
        }
        return view('admin.appointment.detail', compact(['appointment']));
    }
    //クライエント情報の編集画面
    public function edit(Request $request)
    {
        // appointment Modelからデータを取得する
        $appointment= Appointment::find($request->id);
        if (empty($appointment)) {
            abort(404);    
        }
        $selected_perms=$appointment->perms()->pluck("id")->toArray();
        $selected_extensions=$appointment->extensions()->pluck("id")->toArray();
        $selected_eyebrows=$appointment->eyebrows()->pluck("id")->toArray();
        $selected_options=$appointment->options()->pluck("id")->toArray();
        $perms=Perm::all();
        $extensions=Extension::all();
        $eyebrows=Eyebrow::all();
        $options=Option::all();
        
        return view('admin.appointment.edit', ['appointment_form' => $appointment,'selected_perms' => $selected_perms,'selected_extensions' => $selected_extensions,'selected_eyebrows' => $selected_eyebrows,'selected_options' => $selected_options,'perms' => $perms,'extensions' => $extensions,'eyebrows' => $eyebrows,'options' => $options]);
    }

    //編集画面から送信されたフォームデータを処理
    public function update(Request $request)
        {
            //  Modelからデータを取得する
            $appointment = Appointment::find($request->id);
            // 送信されてきたフォームデータを格納する
            $appointment_form = $request->all();
            if(isset($appointment_form['perm'])){
                $perms = $appointment_form['perm'];
            }else{
                $perms=[];
            }
            if(isset($appointment_form['extension'])){
                $extensions = $appointment_form['extension'];
            }else{
                $extensions=[];
            }
            if(isset($appointment_form['eyebrow'])){
                $eyebrows = $appointment_form['eyebrow'];
            }else{
                $eyebrows=[];
            }
            if(isset($appointment_form['option'])){
                $options = $appointment_form['option'];
            }else{
                $options=[];
            }
            unset($appointment_form['_token']);
            unset($appointment_form['perm']);
            unset($appointment_form['extension']);
            unset($appointment_form['eyebrow']);
            unset($appointment_form['option']);
            $appointment->fill($appointment_form);
            $appointment->save();
            $appointment->perms()->sync($perms);
            $appointment->extensions()->sync($extensions);
            $appointment->eyebrows()->sync($eyebrows);
            $appointment->options()->sync($options);
    
          return redirect('admin/salon/index');
        }
}

