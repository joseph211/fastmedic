<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msd extends Model
{
    // Table Name
        protected $table = 'msds';

    //Primary Key
    public $primarykey = 'id';

    //timestamps
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
