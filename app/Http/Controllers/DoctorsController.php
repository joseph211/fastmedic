<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Doctors;
use DB;
class DoctorsController extends Controller
{

     /**
     * Middleware for allowing only authenticated users.
     */
     public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Doctors and Specialists
        //$title ='Doctors and Specialists';
        $doctors = Doctors::orderBy('fName','asc')->paginate(6);
        return view('doctors.index')->with('doctors',$doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validation fields entry
        $this->validate($request,[
        'FirstName' =>'required',
        'MiddleName' => 'required', 
        'LastName' => 'required', 
        'experience' => 'required',
        'img' => 'image|nullable|max:1999'
       
    ]);
 
         //File image 
    if($request->hasFile('img')){
         $fileName = $request->file('img')->getClientOriginalName( );
         $varias = pathinfo($fileName,PATHINFO_FILENAME);
         $extension = $request->file('img')->getClientOriginalExtension();
         $fileNameToStore = $varias.'_'.time().'.'.$extension;
         $path = $request->file('img')->storeAs('public/images',$fileNameToStore);
    }else{
        $fileNameToStore = 'noimage.jpg';
    }
        //Create Doctor

        $doctor = new Doctors;
        $doctor->fName = $request->input('FirstName');
        $doctor->mName = $request->input('MiddleName');
        $doctor->user_id = auth()->user()->id;
        $doctor->img = $fileNameToStore;
        $doctor->lName = $request->input('LastName');
        $doctor->experience = $request->input('experience');
        $doctor->hospName = $request->input('hospName');
        $doctor->certificate = $request->input('certificate');
        $doctor-> save();

         return redirect('/doctors')->with('success','Specialist  Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Display Doctors

        $doctor = Doctors::find($id);
        return view('doctors.show')->with('doctor',$doctor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edit Doctors
         $doctor = Doctors::find($id);

       //Check For Correct User 
       if(auth()->user()->id  !==$doctor->user->id){
        return redirect('/doctors')->with('errror', 'Unauthorized Page');
       }  
        return view('doctors.edit')->with('doctor',$doctor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,[
        'FirstName' =>'required',
        'MiddleName' => 'required', 
        'LastName' => 'required',
        'experience' => 'required',
        'img' => 'image|nullable|max:1999'
       
    ]);


         //File image 
    if($request->hasFile('img')){
         $fileName = $request->file('img')->getClientOriginalName( );
         $varias = pathinfo($fileName,PATHINFO_FILENAME);
         $extension = $request->file('img')->getClientOriginalExtension();
         $fileNameToStore = $varias.'_'.time().'.'.$extension;
         $path = $request->file('img')->storeAs('public/images',$fileNameToStore);
    }

        //Update Doctor

        $doctor = Doctors::find($id);
        $doctor->fName = $request->input('FirstName');
        $doctor->mName = $request->input('MiddleName');
        $doctor->lName = $request->input('LastName');
         if($request->hasFile('img')){
        $doctor->img = $fileNameToStore;
    }
        $doctor->experience = $request->input('experience');
        $doctor->hospName = $request->input('hospName');
        $doctor->certificate = $request->input('certificate');
        $doctor-> save();

         return redirect('/doctors')->with('success','Specialist  Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE
             $doctor = Doctors::find($id);
             
       //Check For Correct User 
               if(auth()->user()->id  !==$doctor->user->id){
        return redirect('/doctors')->with('errror', 'Unauthorized Page');
       }  
       if($doctor->img != 'noimage.jpg'){
           //Delete Image
        Storage::delete('public/images/'.$doctor->img);
       }
             $doctor->delete();
        return redirect('/home')->with('success','Doctor Deleted');

    }
}
