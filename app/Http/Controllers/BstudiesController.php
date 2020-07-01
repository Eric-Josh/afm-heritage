<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bstudies;

class BstudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bstudies = Bstudies::sortable()->paginate(20);
        return view('bstudies.index', compact('bstudies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bstudies.create');
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
            'lesson_no' => 'required|numeric',
            'class' => 'required|numeric',
            'title' => 'required|max:255',
            'text' => 'required',
            'mverse' => 'required',
            'intro' => 'required',
            'items' => 'required',
            'conclusion' => 'required',
            'lang' => 'required|numeric'

        ]);

        $bstudies = new Bstudies([
            'lesson_no' => $request->get('lesson_no'),
            'class' => $request->get('class'),
            'title' => $request->get('title'),
            'text' => $request->get('text'),
            'mverse' => $request->get('mverse'),
            'intro' => $request->get('intro'),
            'items' => $request->get('items'),
            'conclusion' => $request->get('conclusion'),
            'lang' => $request->get('lang') 
        ]);
        $bstudies->save();

        return redirect('/bstudies')->with('success', 'Bible Study Outline saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bstudies = Bstudies::find($id);
        return view('bstudies.show', compact('bstudies')); 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bstudies = Bstudies::find($id);
        return view('bstudies.edit', compact('bstudies')); 
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
        $bstudies = Bstudies::find($id);
        $bstudies->lesson_no = $request->input('lesson_no');
        $bstudies->class = $request->input('class');
        $bstudies->title = $request->input('title');
        $bstudies->text = $request->input('text');
        $bstudies->mverse = $request->input('mverse');
        $bstudies->intro = $request->input('intro');
        $bstudies->items = $request->input('items');
        $bstudies->conclusion = $request->input('conclusion');
        $bstudies->lang = $request->input('lang');
        $bstudies->save();

        return redirect('/bstudies')->with('success', 'Outline Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bstudies = Bstudies::find($id);
        $bstudies->delete();
        return redirect('/bstudies')->with('success', 'Outline deleted!');
    }
}
