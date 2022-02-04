<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Eyebrow;

class EyebrowController extends Controller
{
    public function add()
    {
        return view ('admin.eyebrow.create');
    }
    
    public function create(Request $request)
    {
    
      $eyebrow = new Eyebrow;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      // データベースに保存する
      $eyebrow->fill($form);
      $eyebrow->save();
      
      return redirect('admin/eyebrow/index');
  }
    // 一覧表示
    public function index(Request $request)
    {
        $posts =Eyebrow::all();
        return view ('admin.eyebrow.index', ['posts' => $posts]);
    }
    
    public function edit(Request $request)
    {
    // Modelからデータを取得する
    $eyebrow = Eyebrow::find($request->id);
    if (empty ($eyebrow))
    { 
    abort(404);
    }
    return view('admin.eyebrow.edit', ['eyebrow_form' => $eyebrow]);
    }
    
    public function update(Request $request)
    {
        
      // Modelからデータを取得する
      $eyebrow = Eyebrow::find($request->id);
      // 送信されてきたフォームデータを格納する
      $eyebrow_form = $request->all();

      unset($eyebrow_form['remove']);
      unset($eyebrow_form['_token']);
      // 該当するデータを上書きして保存する
      $eyebrow->fill($eyebrow_form)->save();
      return redirect('admin/eyebrow/index');
    }
    
    // 削除
    
    public function delete(Request $request)
    {
        $eyebrow = Eyebrow::find($request->id);
        $eyebrow->delete();
        return redirect('admin/eyebrow/index');
    }
}
