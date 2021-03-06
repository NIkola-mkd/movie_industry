<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\FilmRequest;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
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
        return view('films.create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmRequest $request)
    {
        if (!Film::create($request->validated()))

            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Film stored'))->with(['color' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $films = DB::select('SELECT m.m_name, d.*, g.*, f.*,f.2D as _2d, f.3D as _3d
                                FROM films f
                                INNER JOIN movie m ON f.movie_id = m.movie_id
                                INNER JOIN directors d ON d.directors_id = m.directors_id
                                INNER JOIN genre g ON g.genre_id = m.genre_id
                                WHERE f.movie_id =' . $id);

        $actors = DB::select('SELECT a.a_name, a.a_surname
                                FROM actors a
                                INNER JOIN Plays P on a.actor_id = P.actor_id
                                WHERE P.movie_id = ' . $id);

        $rating = DB::select('SELECT CAST(AVG(c.rate) AS FLOAT)as average , m.m_name
                                    FROM Critiques c
                                    INNER JOIN films f on c.movie_id = f.movie_id
                                    INNER JOIN movie m on f.movie_id = m.movie_id
                                    WHERE m.movie_id =' . $id . '
                                    GROUP BY  m.m_name');

        return view('films.show', compact('films', 'actors', 'rating'));
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
        if (!Film::where('movie_id', $id)->delete())
            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Movie deleted'))->with(['color' => 'success']);
    }
}