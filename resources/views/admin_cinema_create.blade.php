@extends('layouts.admin_layout')

@section('stylesheets')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
@endsection
@section('content')

<h3>Add a cinema</h3>
<hr>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="modal-content">
      <div class="modal-header">
           <!--<div class="pull-right">
            <a class="btn btn-primary" href="/admin/cinema"> Back</a>
        </div>--->
        <h4 class="modal-title" >Add Cinema:</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-md-12">

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

        <form action= "{{ route('cinemas.store') }}" method="POST" >
              @csrf
                  <div class="form-group">
                      <label for="">Cinema Name</label>
                      <input type="text"  class="form-control" name="cinema_name" required="true">
                  </div>

                  <div class="form-group">
                      <label for="">Location</label>
                      <input type="string"  class="form-control" name="location" required="true">
                  </div>
                  
                  <div class="form-group">
                      <button class="btn btn-success"type="submit" name="submit">Add</button>
                  </div>
              </form>
          </div>
          </div>
        </div>
      
    </div>

  </div>
</div>
@endsection


@section("js")

<!-- Page level plugins -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
@endsection
