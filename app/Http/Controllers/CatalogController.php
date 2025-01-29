<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieModel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CatalogController
{
    public function home()
    {
        return view('catalog.home');
    }


        public function index()
    {
        //$movies = Movie::all();
        $movies = Movie::paginate(4);

        return view('catalog.index', ['movies' => $movies]);
    }


    public function show($id)
    {
        // Busca la película por ID o lanza un error 404 si no existe
        $movie = Movie::findOrFail($id);
        return view('catalog.show', ['movie' => $movie]);
    }

    public function create()
    {
        return view('catalog.create');
    }

    public function postCreate(Request $request)
    {
        //Validación

        $request->validate([
            'title' => 'required|max:255',
            'year' => 'required|integer|min:1900|max:2022',
            'director' => 'required|max:255',
            'poster' => 'required',
            'synopsis' => 'required',
        ]);

        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();
        return redirect()->route('catalog.index');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('catalog.edit', ['movie' => $movie]);
        //return view('catalog.edit', compact('movie', 'id'));
    }

    public function rentConfirm()
    {
        return view('catalog.rentConfirm');
    }

    public function rent($id)
    {
        $movie = Movie::changeState($id);
        return view('catalog.rent', ['id' => $movie->id]);
    }
}
