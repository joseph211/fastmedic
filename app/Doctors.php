<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    
    //Table Name
    protected $table = 'doctors';

    //Primary Key
    public $primarykey = 'id';

    //timestamps
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
