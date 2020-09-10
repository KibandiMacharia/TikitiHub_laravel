<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Response;
use Redirect;
use App\Images;
use Image;

class MovieController extends Controller
{
        public function home(){
            $movie = Movie::all();
            return view('admin_movieinfo',['movie' => $movie]);
        }
        public function index(){
            $movie = DB::select('SELECT * FROM `movie_info`');
            return view('admin_movieinfo',['movie'=>$movie]);
        }

        public function show($id) {
            $movie = DB::select('select * from movie_info where id = ?',[$id]);
            return view('EditMovies',['movie'=>$movie]);
            }

        public function store(Request $request){
            $request->validate([
            'movie_title' => 'required',
            'movie_cast' => 'required',
            'movie_genre' => 'required',
            'movie_description' => 'required',
            'movie_poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url' => 'required',
            'release_year' => 'required',
            'language' => 'required',   
        ]);

            // Handle the file upload
            /*if ($request ->hasFile('movie_poster')) {
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
            }$movie= new Movie;
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
                        ->with('success','Movie inserted successfully.');*/

            $input=$request->all();

            $imagePath=$request->file('movie_poster');
            $imageName=time().'.'.$imagePath->getClientOriginalExtension();

            $imagePath->move('uploads',$imageName);
            $input['movie_poster']=$imageName;

            Movie::create($input);
            return Redirect::to('/admin/movieinfo')->with('success','movie inserted successfully.'); 
    }

    public function destroy(Movie $movie){
        $movie->delete();
        return redirect()->route('movie')
                        ->with(['failure','Movie deleted successfully']);
    }
    public function edit(Request $request,$id) {
        $id = $request->input('movie_id');
        $title = $request->input('movie_title');
        $cast = $request->input('movie_cast');
        $genre = $request->input('movie_genre');
        $description = $request->input('movie_description');
        $poster = $request->input('movie_poster');
        $url = $request->input('url');
        $year = $request->input('release_year');
        $language = $request->input('language');
        //DB::update("update movie_info set usertype='$usertype' where id = '$id'");
        DB::update('update movie_info set movie_title = ?,movie_cast=?,movie_genre=?,movie_description=?,movie_poster=?,url=?,release_year=?,language=? where id = ?',[$title,$cast,$genre,$description,$poster,$url,$year,$language,$id]);
        echo "Record updated successfully.";
        return redirect('dmin/');
    }

}
