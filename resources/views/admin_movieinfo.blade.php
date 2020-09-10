@extends('layouts.admin_layout')

@section('stylesheets')
@section('stylesheets')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src="bootstrap/js/bootstrap.js"></script>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
@endsection
@endsection

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

  
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Movies</h6>
        </div>
    <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-dark id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Movie Title</th>
                            <th>Cast</th>
                            <th>Genre</th>
                            <th>Movie Description</th>
                            <th>Poster</th>
                            <th>Trailer</th>
                            <th>Release Year</th>
                            <th>Language</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Movie Title</th>
                            <th>Cast</th>
                            <th>Genre</th>
                            <th>Movie Description</th>
                            <th>Poster</th>
                            <th>Trailer</th>
                            <th>Release Year</th>
                            <th>Language</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
         @if(count($movie) > 0)
        @foreach($movie->all() as $movies)
        <tbody>
        <tr>
            <td>{{$movies['movie_id'] }}</td>
            <td>{{ $movies['movie_title'] }}</td>
            <td>{{ $movies['movie_cast'] }}</td>
            <td>{{ $movies['movie_genre'] }}</td>
            <td>{{ $movies['movie_description'] }}</td>
            <td>{{ $movies['movie_poster'] }}</td>
            <td><a href = "{{ $movies['url'] }}" target="_blank">{{ $movies['movie_title'] }} on youtube</a></td>
            <td>{{ $movies['release_year'] }}</td>
            <td>{{ $movies['language'] }}</td>
            <td>
                <form action="{{ route('movie.destroy',$movies->movie_id) }}" method="POST">   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning">Delete</button>
                </form>
                <!--<a href = 'edit/{{ $movies->movie_id }}'>Edit</a>-->
            </td>
        </tr>
        @endforeach
         @endif
         </tbody>
    </table>
    </div>
    </div>
                   <div class="pull-right">
                <a class="btn btn-success" href="/admin/movieinfo/create"> Add Movie</a>
            </div>
                                </div>


@endsection
