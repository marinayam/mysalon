<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perm extends Model
{
    protected $guarded = array ('id');
    
    // public static $rules = array(
    //     'perm' => 'required',
    // );
    
    
    // Appointment Modelに関連付けを行う
    public function appointments()
  {
    return $this->belongsToMany('App\Appointment');
  }
}
