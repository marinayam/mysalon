<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trigger extends Model
{
    protected $guarded = array ('id');
    
    public static $rules = array(
        'trigger' => 'required',
    );
    
    
    // Chart Modelに関連付けを行う
    public function charts()
  {
    return $this->belongsToMany('App\Chart');
  }
    
}
