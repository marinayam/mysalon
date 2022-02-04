<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $guarded = array ('id');
    public static $rules = array(
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
       
    );
    // Trigger Modelに関連付けを行う
    public function triggers()
  {
    return $this->belongsToMany('App\Trigger');
  }
          
    
}
