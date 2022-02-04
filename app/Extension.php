<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    protected $guarded = array ('id');
    
    // public static $rules = array(
    //     'extension' => 'required',
    // );
    
    
// Appointment Modelに関連付けを行う
    public function appointments()
  {
    return $this->belongsToMany('App\Appointment');
  }
}
