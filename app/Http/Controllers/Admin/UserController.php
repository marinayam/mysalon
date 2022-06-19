<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Chart;
use App\Appointment;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
      if ($cond_name != '') {
          // 検索されたら検索結果を取得する
          $users = User::where('hira_name', $cond_name)->get();
          
      } else {
          // それ以外はすべてを取得する
          $users = User::all();
          
      }
      return view('admin.index', compact(['users', 'cond_name']));
    }
    public function chart(Request $request)
    {
        // Chart Modelからデータを取得する
        $chart= Chart::find($request->id);
        if (empty($chart)) {
            abort(404);    
        }
        return view('admin.chart.detail', ['chart_form' => $chart]);
    }
    public function appointment(Request $request)
    {
        // appointment Modelからデータを取得する
        $user= User::find($request->id);
        if (empty($user)) {
            abort(404);    
        }
        return redirect('admin/appointment/index?user_id=' . $user->id);
    }
    public function remove(Request $request)
    {
        $user= User::find($request->id);
        if (empty($user)) {
            abort(404);    
        }
        $user->chart->delete();
        Appointment::where('user_id', $user->id)->delete();
        $user->delete();
        return redirect('admin/salon/index');
    }
}
