<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Switch between pages 

     public function index(){
     	$title = 'Remote Medical Specialists';
	  return view('pages.index')->with('title',$title);
}

     public function doctor(){
     	$data =array(
     		 'title' => 'Remote Medical Specialists',
     		 'doctors' => ['Online Status', 'Education Background', 'Specialization']
     	);
      

	  return view('pages.doctors')->with($data);
}
     public function diagnosticLab(){
	  return view('pages.diagnosticLab');
}
     public function chat(){
	  return view('pages.chat');
}
     public function telemedicine(){
      return view('pages.telemedicine');
}

    public function hospitals(){
	  return view('pages.hospitals');
}
}
