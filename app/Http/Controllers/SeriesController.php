<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Serial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SeriesRequest;

class SeriesController extends Controller
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
        $movies = Movie::all();
        return view('series.create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeriesRequest $request)
    {


        if (!Serial::create($request->validated()))

            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Serial stored'))->with(['color' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $films = DB::select('SELECT m.m_name, d.*, g.*, f.*
                                FROM tv_series f
                                INNER JOIN movie m ON f.movie_id = m.movie_id
                                INNER JOIN directors d ON d.directors_id = m.directors_id
                                INNER JOIN genre g ON g.genre_id = m.genre_id
                                WHERE f.movie_id =' . $id);

        $actors = DB::select('SELECT a.a_name, a.a_surname
FROM actors a
INNER JOIN Plays P on a.actor_id = P.actor_id
WHERE P.movie_id = ' . $id);

        return view('series.show', compact('films', 'actors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Serial::where('movie_id', $id)->delete())
            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Serial deleted'))->with(['color' => 'success']);
    }
}