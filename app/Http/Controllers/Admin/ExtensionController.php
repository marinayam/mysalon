<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extension;

class ExtensionController extends Controller
{
    public function add()
    {
        return view ('admin.extension.create');
    }
    
    public function create(Request $request)
    {
    
      $extension = new Extension;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      // データベースに保存する
      $extension->fill($form);
      $extension->save();
      
      return redirect('admin/extension/index');
  }
    // 一覧表示
    public function index(Request $request)
    {
        $posts =Extension::all();
        return view ('admin.extension.index', ['posts' => $posts]);
    }
    
    public function edit(Request $request)
    {
    // Modelからデータを取得する
    $extension = Extension::find($request->id);
    if (empty ($extension))
    { 
    abort(404);
    }
    return view('admin.extension.edit', ['extension_form' => $extension]);
    }
    
    public function update(Request $request)
    {
        
      // Modelからデータを取得する
      $extension = Extension::find($request->id);
      // 送信されてきたフォームデータを格納する
      $extension_form = $request->all();

      unset($extension_form['remove']);
      unset($extension_form['_token']);
      // 該当するデータを上書きして保存する
      $extension->fill($extension_form)->save();
      return redirect('admin/extension/index');
    }
    
    // 削除
    
    public function delete(Request $request)
    {
        $extension = Extension::find($request->id);
        $extension->delete();
        return redirect('admin/extension/index');
    }
}
