<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiagnosLab;
use DB;

class DiagnosLabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $labs = DiagnosLab::orderBy('id','asc')->paginate(6);
         return view('labs.index')->with('labs',$labs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('labs.create');
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
        'LabName' =>'required',
        'Result' => 'required', 
        'Diagnosis' => 'required'
        ]);

        //Create Lab

        $lab = new DiagnosLab;
        $lab->name = $request->input('LabName');
        $lab->results = $request->input('Result');
        $lab->diagnosis =$request->input('Diagnosis'); 
        $lab->save();

         return redirect('/labs')->with('success','Labs Result Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $lab = DiagnosLab::find($id);
        return view('labs.show')->with('lab',$lab);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //Edit Labs
         $lab = DiagnosLab::find($id);
                  
        return view('labs.edit')->with('lab',$lab);
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
        
             //validation fields entry
        $this->validate($request,[
        'LabName' =>'required',
        'Result' => 'required', 
        'Diagnosis' => 'required'
        ]);

        //Create Lab

        $lab = new DiagnosLab;
        $lab->name = $request->input('LabName');
        $lab->results = $request->input('Result');
        $lab->diagnosis =$request->input('Diagnosis'); 
        $lab->save();

         return redirect('/labs')->with('success','Labs Result Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
