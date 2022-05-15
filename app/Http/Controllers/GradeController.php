<?php

namespace App\Http\Controllers;

use App\Http\Requests\GradeRequest;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avg = DB::select('SELECT CAST(SUM((Grade.acting + Grade.expression + Grade.naturalness + Grade.devotion)/4)/                   COUNT(*) AS FLOAT ) as avgG
                            FROM Grade');

        $lower = DB::select('SELECT a.a_name, a.a_surname, CAST((G.acting + G.expression + G.naturalness + G.devotion)/4 AS FLOAT) as avg
                    FROM Grade G
                    INNER JOIN actors a on G.actors_id = a.actor_id
                    HAVING avg <= (SELECT CAST(SUM((Grade.acting + Grade.expression + Grade.naturalness + Grade.devotion)/4)/COUNT(*)  AS FLOAT ) as avgG
                    FROM Grade)
                    ORDER BY avg DESC');

        $higher = DB::select('SELECT a.a_name, a.a_surname, CAST((G.acting + G.expression + G.naturalness + G.devotion)         /                    4 AS FLOAT) as avg
                         FROM Grade G
                        INNER JOIN actors a on G.actors_id = a.actor_id
                        HAVING avg >= (SELECT CAST(SUM((Grade.acting + Grade.expression + Grade.naturalness + Grade.devotion)/4)/COUNT(*)  AS FLOAT ) as avgG
                        FROM Grade)
                        ORDER BY avg DESC');

        return view('grades.index', compact('avg', 'lower', 'higher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GradeRequest $request)
    {
        if (!Grade::create($request->validated()))
            return back()->withStatus(__('Error'))->with(['color' => 'danger']);

        return back()->withStatus(__('Grade stored'))->with(['color' => 'success']);
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
        //
    }
}