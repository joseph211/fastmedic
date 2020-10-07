<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosLab extends Model
{
  

    //Table Name
    protected $table = 'diagnos_labs';

    //Primary Key
    public $primarykey = 'id';

    //timestamps
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
