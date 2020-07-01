<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cgs;

class CgsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cgs = Cgs::sortable()->paginate(20);
        return view('cgs.index', compact('cgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cgs.create');
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
            'cgs_no' => 'required|numeric',
            'title' => 'required|max:255',
            'lyrics' => 'required',
            'lang' => 'required|numeric'

        ]);

        $cgs = new Cgs([
            'cgs_no' => $request->get('cgs_no'),
            'title' => $request->get('title'),
            'lyrics' => $request->get('lyrics'),
            'lang' => $request->get('lang') 
        ]);
        $cgs->save();

        return redirect('/cgs')->with('success', 'CGS saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cgs = Cgs::find($id);
        return view('cgs.show', compact('cgs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cgs = Cgs::find($id);
        return view('cgs.edit', compact('cgs'));
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
        $cgs = Cgs::find($id);
        $cgs->cgs_no = $request->input('cgs_no');
        $cgs->title = $request->input('title');
        $cgs->lyrics = $request->input('lyrics');
        $cgs->lang = $request->input('lang');
        $cgs->save();

        return redirect('/cgs')->with('success', 'CGS Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cgs = Cgs::find($id);
        $cgs->delete();
        return redirect('/cgs')->with('success', 'CGS Deleted!');
    }
}
