<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $researches = Research::all();
        
        return view('sheet.table',['researches' => $researches]);
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
        Research::create([
            'research_title' => $request->research_title,
            'leader' => $request->leader,
            'members' => $request->members,
            'college' => $request->college,
            'status' => $request->status,
            'date_completed' => $request->date_completed
            
        ]);

        return redirect('table');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\research  $research
     * @return \Illuminate\Http\Response
     */
    public function show(research $research)
    {
        //
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
    public function update(Request $request, research $research)
    {
        Research::where('id', $request)->update([
            'research_title' => $request->research_title,
            'leader' => $request->leader,
            'members' => $request->members,
            'college' => $request->college,
            'status' => $request->status,
            'date_completed' => $request->date_completed
            
        ]);

        return redirect('table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\research  $research
     * @return \Illuminate\Http\Response
     */
    public function destroy(Research $research)
    {
        dd($research);
        Research::where('id',$research->id)->delete();
        
        return redirect('table');
    }
}
