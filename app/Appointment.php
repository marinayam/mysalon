<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = array ('id');
    public static $rules = array(
        'user_email' => 'required',
        'date' => 'required',
        'time' => 'required',
       
    );
    // Modelに関連付けを行う
    public function perms()
  {
    return $this->belongsToMany('App\Perm');
  }
  public function extensions()
  {
    return $this->belongsToMany('App\Extension');
  }
  public function eyebrows()
  {
    return $this->belongsToMany('App\Eyebrow');
  }
  // Option Modelに関連付けを行う
  public function options()
  {
    return $this->belongsToMany('App\Option');
  }
}
