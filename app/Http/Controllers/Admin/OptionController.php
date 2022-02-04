<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Option;

class OptionController extends Controller
{
    public function add()
    {
        return view ('admin.option.create');
    }
    
    public function create(Request $request)
    {
    
      $option = new Option;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      // データベースに保存する
      $option->fill($form);
      $option->save();
      
      return redirect('admin/option/index');
  }
    // 一覧表示
    public function index(Request $request)
    {
        $posts =Option::all();
        return view ('admin.option.index', ['posts' => $posts]);
    }
    
    public function edit(Request $request)
    {
    // Modelからデータを取得する
    $option = Option::find($request->id);
    if (empty ($option))
    { 
    abort(404);
    }
    return view('admin.option.edit', ['option_form' => $option]);
    }
    
    public function update(Request $request)
    {
        
      // Modelからデータを取得する
      $option = Option::find($request->id);
      // 送信されてきたフォームデータを格納する
      $option_form = $request->all();

      unset($option_form['remove']);
      unset($option_form['_token']);
      // 該当するデータを上書きして保存する
      $option->fill($option_form)->save();
      return redirect('admin/option/index');
    }
    
    // 削除
    
    public function delete(Request $request)
    {
        $option = Option::find($request->id);
        $option->delete();
        return redirect('admin/option/index');
    }
}
