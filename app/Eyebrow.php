<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eyebrow extends Model
{
    protected $guarded = array ('id');
    
    // public static $rules = array(
    //     'eyebrow' => 'required',
    // );
    
    
    // Appointment Modelに関連付けを行う
    public function appointments()
  {
    return $this->belongsToMany('App\Appointment');
  }
}
