<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Std;

class StdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $std = Std::sortable()->paginate(20);
        return view('std.index', compact('std'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('std.create');
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
            'title'=>'required|max:255',
            'content'=>'required',
            'lang'=>'required|numeric'
        ]);

        $std = New Std ([
            'title'=> $request->get('title'),
            'content'=> $request->get('content'),
            'lang'=> $request->get('lang')
        ]);
        $std->save();

        return redirect('/std')->with('success', 'Step to Deliverance saved!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $std = Std::find($id);
        return view('std.show', compact('std'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $std = Std::find($id);
        return view('std.edit', compact('std'));
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
        $std = Std::find($id);
        $std->title = $request->input('title');
        $std->content = $request->input('body');
        $std->lang = $request->input('lang');
        $std->save();

        return redirect('/std')->with('success', 'Step to Deliverance updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $std = Std::find($id);
        $std->delete();
        
        return redirect('/std')->with('success', 'Step to Deliverance deleted!'); 
    }
}
