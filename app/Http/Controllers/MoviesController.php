<?php

namespace App\Http\Controllers;

use App\Http\Requests\MoviesRequest;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Director;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $directors = Director::all();
        $movies = Movie::all();
        return view('movies.create', compact('genres', 'directors', 'movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MoviesRequest $request)
    {

        if (!Movie::create($request->validated()))

            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Movie stored'))->with(['color' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('movies.view', ['movie' => Movie::where('movie_id', $id)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('movies.edit', ['movie' => Movie::where('movie_id', $id)->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MoviesRequest $request, $id)
    {
        if (!Movie::where('movie_id', $id)->update($request->validated()))
            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Movie edited'))->with(['color' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Movie::where('genre_id', $id)->delete())
            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Movie deleted'))->with(['color' => 'success']);
    }
}