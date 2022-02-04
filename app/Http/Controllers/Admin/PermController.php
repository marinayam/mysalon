<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Perm;

class PermController extends Controller
{
    public function add()
    {
        return view ('admin.perm.create');
    }
    
    public function create(Request $request)
    {
    
      $perm = new Perm;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      // データベースに保存する
      $perm->fill($form);
      $perm->save();
      
      return redirect('admin/perm/index');
  }
    // 一覧表示
    public function index(Request $request)
    {
        $posts =Perm::all();
        return view ('admin.perm.index', ['posts' => $posts]);
    }
    
    public function edit(Request $request)
    {
    // Modelからデータを取得する
    $perm = Perm::find($request->id);
    if (empty ($perm))
    { 
    abort(404);
    }
    return view('admin.perm.edit', ['perm_form' => $perm]);
    }
    
    public function update(Request $request)
    {
        
      // Modelからデータを取得する
      $perm = Perm::find($request->id);
      // 送信されてきたフォームデータを格納する
      $perm_form = $request->all();

      unset($perm_form['remove']);
      unset($perm_form['_token']);
      // 該当するデータを上書きして保存する
      $perm->fill($perm_form)->save();
      return redirect('admin/perm/index');
    }
    
    // 削除
    
    public function delete(Request $request)
    {
        $perm = Perm::find($request->id);
        $perm->delete();
        return redirect('admin/perm/index');
    }
}
