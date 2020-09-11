<?php

namespace App\Http\Controllers\Api;

use App\Cinemas;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;

class CinemasController extends Controller
{
    public function cinemas()
    {
        $cinemas = Cinemas::all();
        
        return response()->json([
            'success' => true,
            'cinemas' => $cinemas
        ]);
    }
}
