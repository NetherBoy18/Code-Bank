<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Research;

class SheetsController extends Controller
{
    public function index()
    {

        $researches = Research::where('status' , 'A')->simplePaginate(5);
        
        
        return view('sheet.table',['researches' => $researches]);
    }

    public function indexes()
    {
        
        $researches = Research::all();
        
        
        return view('sheet.show',['researches' => $researches]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request->file('upload');
        
        $name=time() . "." . $file->getClientOriginalExtension();  
        $file->storeAs('public/files', $name);
        
        Research::create([
            'research_title' => $request->research_title,
            'leader' => $request->leader,
            'members' => $request->members,
            'college' => $request->college,
            'status' => $request->status,
            'date_completed' => $request->date_completed,
            'file'=> $name
            
        ]);

        return redirect('table');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\research  $research
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $researches=Research::where('id', $id)->first();
        //  dd($researches);
        return view('sheet.show',['researches' => $researches]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\research  $research
     * @return \Illuminate\Http\Response
     */
    public function edit(research $research)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\research  $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        Research::where('id', $id)->update([
            'research_title' => $request->research_title,
            'leader' => $request->leader,
            'members' => $request->members,
            'college' => $request->college,
            
            'date_completed' => $request->date_completed
            
        ]);

        return view('sheet.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\research  $research
     * @return \Illuminate\Http\Response
     */
    public function destroy(Research $id)
    {
        
        Research::where('id',$id->id)->update(['status' => 'I']);
        
        return redirect('table');
    }
}
