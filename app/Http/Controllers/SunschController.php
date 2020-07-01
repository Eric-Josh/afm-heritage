<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sunsch;

class SunschController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sunsch = Sunsch::sortable()->paginate(20);
        return view('sunsch.index', compact('sunsch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sunsch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'bref' => 'required',
            'lessno' => 'required|numeric',
            'classv' => 'required|numeric',
            'mverse' => 'required',
            'notes' => 'required',
            'ques' => 'required',
            'lang' => 'required|numeric'
        ]);

        $sunsch = New Sunsch ([
            'title' => $request->get('title'),
            'bref' => $request->get('bref'),
            'lessno' => $request->get('lessno'),
            'classv' => $request->get('classv'),
            'mverse' => $request->get('mverse'),
            'cref' => $request->get('cref'),
            'notes' => $request->get('notes'),
            'ques' => $request->get('ques'),
            'classv2' => $request->get('classv'),
            'lang' => $request->get('lang'),
            'bk' => $request->get('bk')
        ]);
        $sunsch->save();

        return redirect('/sunsch')->with('success', 'Sunday School Outline saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sunsch = Sunsch::find($id);
        return view('sunsch.show', compact('sunsch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sunsch = Sunsch::find($id);
        return view('sunsch.edit', compact('sunsch'));
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
        $sunsch = Sunsch::find($id);
        $sunsch->title = $request->input('title');
        $sunsch->bref = $request->input('bref');
        $sunsch->lessno = $request->input('lessno');
        $sunsch->classv = $request->input('classv');
        $sunsch->mverse = $request->input('mverse');
        $sunsch->cref = $request->input('cref');
        $sunsch->notes = $request->input('notes');
        $sunsch->ques = $request->input('ques');
        $sunsch->classv2 = $request->input('classv');
        $sunsch->lang = $request->input('lang');
        $sunsch->save();

        return redirect('/sunsch')->with('success', 'Sunday School Outline Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sunsch = Sunsch::find($id);
        $sunsch->delete();
        return redirect('/sunsch')->with('success', 'Sunday School Outline Deleted!');
    }
}
