<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chart;
use Carbon\Carbon;
use Storage;
use App\Trigger;

class ChartController extends Controller
{
    public function add()
    {
        $charts=Chart::all();
        $triggers=Trigger::all();
        return view ('chart.create', ['charts'=>$charts,'triggers'=>$triggers]);
    }
    
    public function create(Request $request)
    {
        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        
        //actionの値で分岐
        if($action !== 'submit'){
            //フォームから受け取ったactionを除いたinputの値を取得
            $inputs = $request->except('action');
            
            return redirect()
                ->route('chart.create')
                ->withInput($inputs);

        } else {
            
            // chartモデルVaridationとカルテテーブルへ保存を行う
            $this->validate($request, Chart::$rules);
            $chart = new Chart;
            $chart_form = $request->all();
            $triggers = $chart_form['trigger'];
            unset($chart_form['_token']);
            unset($chart_form['trigger']);
            unset($chart_form['action']);
            $chart->fill($chart_form);
            $chart->save();
            $chart->triggers()->attach($triggers);

            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            //送信完了ページのviewを表示
            return view('chart.send');
            
        }
    }
    
    public function confirm(Request $request)
    {
        $this->validate($request, Chart::$rules);
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name01' => 'required',
            'name02' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'zip' => 'required',
            'pref' => 'required',
            'addr01' => 'required',
            'trigger' => 'required',
            'trouble' => 'required',
            'concern' => 'required',
            'allergy' => 'required',
            'record' => 'required',
            'body_concern' => 'required',
            ]);
        
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();
        $triggers = Trigger::whereIn('id', $inputs['trigger'])->get();

        //入力内容確認ページのviewに変数を渡して表示
        return view('chart.confirm', [
            'inputs' => $inputs,
            'triggers' => $triggers,
        ]);
    }
    
    
    
    public function send(Request $request)
  {
      return view('chart.send');
  }
}
