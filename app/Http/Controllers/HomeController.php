<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {

    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $films = DB::select('select *
                            from films f ,movie m, genre g
                            where f.movie_id = m.movie_id and m.genre_id = g.genre_id');

        $series = DB::select('select *
                            from tv_series s ,movie m, genre g
                            where s.movie_id = m.movie_id and m.genre_id = g.genre_id');
        return view('dashboard', compact('films', 'series'));
    }
}