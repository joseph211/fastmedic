<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    // Table Name
        protected $table = 'hospitals';

    //Primary Key
    public $primarykey = 'id';

    //timestamps
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
