<?php

namespace App\Http\Controllers\Api;

use App\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;

class MoviesController extends Controller
{
    public function movies()
    {
        $movies = Movie::all();
        
        return response()->json([
            'success' => true,
            'movies' => $movies
        ]);
    }
}
