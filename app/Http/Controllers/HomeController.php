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
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user_id = Auth::id();
        $username = User::find($user_id)->kanji_name;
        $appointments = Appointment::where('user_id', $user_id)->get();
      
      return view('home', compact(['appointments', 'username']));
    }
    public function detail(Request $request)
    {
        // appointment Modelからデータを取得する
        $appointment= Appointment::find($request->id);
        if (empty($appointment)) {
            abort(404);    
        }
        return view('appointment.detail', compact(['appointment']));
    }
}
