<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracts;
use App\language;
use DataTables;

class TractsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracts = Tracts::sortable()->paginate(20);
        return view('tracts.index', compact('tracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $lang = language::orderBy('type', 'desc')->get();
        return view('tracts.create')->with('lang', $lang);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tracts::create(request()->validate([
            'lang' => 'required|numeric',
            'no' => 'required|numeric',
            'title' => 'required|max:255',
            'content' => 'required'
        ]));

        return redirect(route('tracts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tract = Tracts::find($id);
        return view('tracts.show',compact('tracts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lang = language::orderBy('type', 'desc')->get();
        $tract = Tracts::find($id);
        return view('tracts.edit',['tract'=>$tract])->with('lang', $lang);
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
        $tract = Tracts::find($id);
        $tract->title = $request->input('title');
        $tract->content = $request->input('body');
        $tract->save();

        return redirect(route('tracts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tract = Tracts::find($id);
        $tract->delete();
        return redirect(route('tracts.index'));
    }

    // custom search function 
    // public function search(Request $request)
    // {
    //     if(request()->ajax())
    //     {
    //         if(!empty($request->filter_title))
    //         {
    //             $data = Tracts::select('title')
    //                             ->where($request->filter_title)
    //                             ->get();
    //         }
    //         else
    //         {
    //             $data = Tracts::select('title')->get();
    //         }
    //         return datatables()->of($data)->make(true);
    //     }
    //     $tracts = Tracts::select('title')->get();
    //     return view('tracts.index', compact('tracts'));
    // }
}
