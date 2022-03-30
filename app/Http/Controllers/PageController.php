<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index() {
      
      // Ottengo tutti i film dal database
      $movies = Movie::all();

      //Passo i film alla view 'home' per stamparli
      return view('home', compact('movies'));

    }
}
