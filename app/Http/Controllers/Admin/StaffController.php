<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Staff;

class StaffController extends Controller
{
    public function add()
    {
        return view ('admin.staff.create');
    }
    public function create(Request $request)
    {
      // Varidationを行う
      $this->validate($request, Staff::$rules);
      
      $staff = new Staff;
      $form = $request->all();
      
      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $staff->image_path = basename($path);
      } else {
          $staff->image_path = null;
      }
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      
      // データベースに保存する
      $staff->fill($form);
      $staff->save();
      
      return redirect('admin/staff/index');
  }
    // 一覧表示
    public function index(Request $request)
    {
        $cond_name = $request ->cond_name;
        
        if ($cond_name !=''){
            // 検索されたら検索結果を取得する
            $staff = Staff::where('name', $cond_name)->get();
            } else {
                // それ以外はすべてのスタッフを取得する
                $staff =Staff::all();
            }
        return view ('admin.staff.index', ['staff' => $staff, 'cond_name' => $cond_name]);
    }
    
    public function edit(Request $request)
    {
    // Staff Modelからデータを取得する
    $staff = Staff::find ($request->id);
    if (empty ($staff))
    { 
    abort(404);
    }
    return view('admin.staff.edit', ['staff_form' => $staff]);
    }
    
    public function update(Request $request)
    {
        // Validationをかける
      $this->validate($request, Staff::$rules);
      // News Modelからデータを取得する
      $staff = Staff::find($request->id);
      // 送信されてきたフォームデータを格納する
      $staff_form = $request->all();
      if ($request->remove == 'true') {
          $staff_form['image_path'] = null;
      } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $staff_form['image_path'] = basename($path);
      } else {
          $staff_form['image_path'] = $staff->image_path;
      }

      unset($staff_form['image']);
      unset($staff_form['remove']);
      unset($staff_form['_token']);
      // 該当するデータを上書きして保存する
      $staff->fill($staff_form)->save();
      return redirect('admin/staff/index');
    }
    // スタッフの削除
    
    public function delete(Request $request)
    {
        $staff = Staff::find($request->id);
        $staff->delete();
        return redirect('admin/staff/index');
    }
}
