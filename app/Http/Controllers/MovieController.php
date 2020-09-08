<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Image;

class MovieController extends Controller
{
       public function home(){
            $movie = Movie::all();
            return view('pages.admin.admin_movieinfo',['movie' => $movie]);
          }



        public function store(Request $request){
            $request->validate([
            'movie_title' => 'required',
            'movie_cast' => 'required',
             'movie_genre' => 'required',
             'movie_description' => 'required',
              'movie_poster' => 'image|nullable|max:1999',
               'url' => 'required',
                'release_year' => 'required',
                 'language' => 'required',   
            ]);

            // Handle the file upload

            if ($request ->hasFile('movie_poster')) {

                $filenameWithExt = $request ->file('movie_poster')->getClientOriginalName();
                    //get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    //getjust ext
                $extension = $request ->file ('movie_poster')->getClientOriginalExtension();
                    //filename to store
                $fileNameToStore = $filename .'_'.time() .'_'. $extension;
                //upload image
                $path = $request->file('movie_poster')->storeAs('public/movie_poster',$fileNameToStore);

            }else{


                $fileNameToStore = 'noimage.jpeg'; 
            }

            $movie= new Movie;
            $movie->movie_title= $request->input ('movie_title');
             $movie->movie_cast= $request->input ('movie_cast');
              $movie->movie_genre= $request->input ('movie_genre');
               $movie->movie_description= $request->input ('movie_description');
                $movie->movie_poster= $fileNameToStore;
                 $movie->url= $request->input ('url');
                  $movie->release_year= $request->input ('release_year');
                   $movie->language= $request->input ('language');




       Movie::create($request->all());
   
        return redirect()->route('movie')
                        ->with('success','Movie inserted successfully.');
    }


    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movie')
                        ->with(['failure','Movie deleted successfully']);
    }

}
