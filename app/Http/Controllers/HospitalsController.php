<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Hospitals;
use DB;

class HospitalsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      
        $hospitals = Hospitals::orderBy('id','asc')->paginate(7);
        return view('hospitals.index')->with('hospitals',$hospitals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospitals.create');
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
        'Name' =>'required',
        'Area_specialization' => 'required', 
        'Location' => 'required', 
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

        $hospital = new Hospitals;
        $hospital->name = $request->input('Name');
        $hospital->specialization_area = $request->input('Area_specialization');
        $hospital->user_id = auth()->user()->id;
        $hospital->img = $fileNameToStore;
        $hospital->location = $request->input('Location');
        $hospital-> save();

         return redirect('/hospitals')->with('success','Hospitals Created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $hospital = Hospitals::find($id);
        return view('hospitals.show')->with('hospital',$hospital);
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
         $hospital = Hospitals::find($id);

       //Check For Correct User 
       if(auth()->user()->id  !==$hospital->user->id){
        return redirect('/hospitals')->with('errror', 'Unauthorized Page');
       }  
        return view('hospitals.edit')->with('hospital',$hospital);
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
        //
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
             $hospital = Hospitals::find($id);
             
       //Check For Correct User 
               if(auth()->user()->id  !==$hospital->user->id){
        return redirect('/hospitals')->with('errror', 'Unauthorized Page');
       }  
       if($hospital->img != 'noimage.jpg'){
           //Delete Image
        Storage::delete('public/images/'.$hospital->img);
       }
             $hospital->delete();
        return redirect('/hospitals')->with('success','Hospital Deleted');
    }
}
