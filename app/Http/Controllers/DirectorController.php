<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DirectorRequest;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = DB::select('select d.*, g.*
                                from directors d, genre g
                                where d.genre_id = g.genre_id');
        // dd($directors);
        return view('directors.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('directors.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DirectorRequest $request)
    {
        if (!Director::create($request->validated()))
            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Director stored'))->with(['color' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres = Genre::all();
        $director = DB::select('select d.*, g.*
                                from DIRECTORS d, GENRE g
                                where d.genre_id = g.genre_id and d.directors_id =' . $id);
        return view('directors.edit', compact('genres', 'director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DirectorRequest $request, $id)
    {
        if (!Director::where('directors_id', $id)->update($request->validated()))
            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Director edited'))->with(['color' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Director::where('directors_id', $id)->delete())
            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Director deleted'))->with(['color' => 'success']);
    }
}
