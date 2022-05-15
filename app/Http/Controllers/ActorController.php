<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ActorRequest;
use App\Models\Film;
use App\Models\Movie;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::all();
        return view('actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActorRequest $request)
    {
        if (!Actor::create($request->validated()))
            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Actor stored'))->with(['color' => 'success']);
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
        $movies = Movie::all();
        $films = DB::select('SELECT a. *, m.m_name, p. *
FROM actors a INNER JOIN Plays p ON p.actor_id = a.actor_id
                INNER JOIN movie m on m.movie_id = p.movie_id
WHERE a.actor_id = ' . $id);
        $actor = Actor::where('actor_id', $id)->first();
        return view('actors.edit', compact('actor', 'movies', 'films'));
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
        if (!Actor::where('actor_id', $id)->delete())
            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Actor deleted'))->with(['color' => 'success']);
    }
}
