@extends('layouts.admin_layout')

@section('stylesheets')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
 <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Movie</h6>
        </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

  

      <table id="datatableid" class="table table-bordered table-dark">
        <tr>
                             <th scope="col">ID</th>
                            <th scope="col">Movie Title</th>
                            <th scope="col">Movie Cast</th>
                            <th scope="col">Movie Genre</th>
                            <th scope="col">Movie Description</th>
                            <th scope="col">Movie Poster</th>
                              <th scope="col">Movie Trailer</th>
                            <th scope="col">Release Year</th>
                            <th scope="col">Language</th>

        </tr>
         @if(count($movie) > 0)
        @foreach($movie->all() as $movies)
        <tr>
            <td>{{$movies['movie_id'] }}</td>
            <td>{{ $movies['movie_title'] }}</td>
            <td>{{ $movies['movie_cast'] }}</td>
            <td>{{ $movies['movie_genre'] }}</td>
            <td>{{ $movies['movie_description'] }}</td>
            <td>{{ $movies['movie_poster'] }}</td>
             <td>{{ $movies['url'] }}</td>
            <td>{{ $movies['release_year'] }}</td>
            <td>{{ $movies['language'] }}</td>
            <td>

                <form action="{{ route('movie.destroy',$movies->movie_id) }}" method="POST">   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
         @endif
    </table>
  
    
    
                   <div class="pull-right">
                <a class="btn btn-success" href="/admin/movieinfo/create"> Add Movie</a>
            </div>
                                </div>


@endsection
