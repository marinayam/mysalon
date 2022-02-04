<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trigger;

class TriggerController extends Controller
{
    public function add()
    {
        return view ('admin.trigger.create');
    }
    
    public function create(Request $request)
    {
      // Varidationを行う
      $this->validate($request, Trigger::$rules);
      
      $trigger = new Trigger;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      // データベースに保存する
      $trigger->fill($form);
      $trigger->save();
      
      return redirect('admin/trigger/index');
  }
    // 一覧表示
    public function index(Request $request)
    {
        $posts =Trigger::all();
        return view ('admin.trigger.index', ['posts' => $posts]);
    }
    
    public function edit(Request $request)
    {
    // dd($request);
    // Modelからデータを取得する
    $trigger = Trigger::find($request->id);
    // dd($trigger);
    if (empty ($trigger))
    { 
    abort(404);
    }
    return view('admin.trigger.edit', ['trigger_form' => $trigger]);
    }
    
    public function update(Request $request)
    {
        // Validationをかける
      $this->validate($request, Trigger::$rules);
      // Modelからデータを取得する
      $trigger = Trigger::find($request->id);
      // 送信されてきたフォームデータを格納する
      $trigger_form = $request->all();

      unset($trigger_form['remove']);
      unset($trigger_form['_token']);
      // 該当するデータを上書きして保存する
      $trigger->fill($trigger_form)->save();
      return redirect('admin/trigger/index');
    }
    
    // 来店きっかけの削除
    
    public function delete(Request $request)
    {
        $trigger = Trigger::find($request->id);
        $trigger->delete();
        return redirect('admin/trigger/index');
    }
}
