@extends('layouts.admin_layout')

@section('stylesheets')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Movie</h2>
        </div>
        <!--<div class="pull-right">
            <a class="btn btn-primary" href="/admin/movieinfo"> Back</a>
        </div>-->
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <label for="">Movie Title</label>
                      <input type="text"  class="form-control" name="movie_title" placeholder="e.g Rush Hour" required="true">
                  </div>
        </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <label for="">Movie Cast</label>
                      <input type="text"  class="form-control" name="movie_cast"   placeholder="e.g Seth Rogen"  required="true">
                  </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <label for="">Movie Genre</label>
                      <input type="text"  class="form-control" name="movie_genre"  placeholder="e.g Action Thriller" required="true">
                  </div>
        </div>

        <!--<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <label for="">Running time(Minutes)</label>
                      <input type="int"  class="form-control" name="running_time"   placeholder="e.g 96" required="true">
                  </div>
        </div>
        -->

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <label for="">Release Year</label>
                      <input type="int"  class="form-control" name="release_year"   placeholder="e.g 2020" required="true">
                  </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <label for="">Language</label>
                      <input type="int"  class="form-control" name="language"  placeholder="e.g English" required="true">
                  </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <label for="">Movie trailer</label>
                      <input type="url"  class="form-control" name="url"   required="true">
                  </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:280px" name="movie_description" placeholder="Movie Description"></textarea>
            </div>
        </div>

                  <div class="form-group">
                    <div class="custom-file">
                        <label for="movie_poster">Choose Image</label>
                        <input id="movie_poster" type="file" name="movie_poster">
                  </div>
              </div>

              <br>
          </br>
   
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

@endsection


@section("js")

<!-- Page level plugins -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
@endsection
