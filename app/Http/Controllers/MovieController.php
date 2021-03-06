<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $movies = Movie::get();
        echo json_encode($movies);

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
    public function store(Request $request)
    {
//        print_r($request->all());

        $movie = new Movie();
        $movie->name = $request->get('name');
        $movie->description = $request->get('description');
        $movie->year = $request->get('year');
        $movie->duration = $request->get('duration');
        $movie->genre = $request->get('genre');

        $movie->save();

        echo json_encode($movie);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $movie)
    {
        $movie = Movie::find($movie);
        $movie->name = $request->get('name');
        $movie->description = $request->get('description');
        $movie->year = $request->get('year');
        $movie->duration = $request->get('duration');
        $movie->genre = $request->get('genre');

        $movie->save();

        echo json_encode($movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($movie)
    {
        $movie = Movie::find($movie);
        $movie->delete();
    }
}
