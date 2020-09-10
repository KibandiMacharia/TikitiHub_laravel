@extends('layouts.admin_layout')

@section('stylesheets')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src="bootstrap/js/bootstrap.js"></script>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
@endsection
@section('content')
    <body>
    <div align= "center">
		<div class="col-md-3" align="center">
		<div class="modal-header">
			<h4 class="modal-title">Movies | Edit</h4>
		</div>
        <form action = "/edit/<?php echo $movie[0]->movie_id; ?>" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <label>Movie Title:</label>
                    <input type = 'text' class="form-control" name = 'id'value = '<?php echo$users[0]->id; ?>' readonly/>
                    <h1></h1>
                
                <label>Name:</label>
                    <td><input type = 'text' class="form-control" name = 'name'value = '<?php echo$users[0]->name; ?>' readonly/>
                    <h1></h1>
                
                <label>Email:</label>
                    <input type = 'text' class="form-control" name = 'email' value = '<?php echo$users[0]->email; ?>' readonly/>
                    <h1></h1>
                
                <label>Usertype:</label>
                    <input type = 'text' class="form-control" name = 'usertype'value = '<?php echo$users[0]->usertype; ?>'/>
                    <h1></h1>

                <button class="btn btn-primary" type="submit" value="Submit">Submit</button>

        </form>
        </div>
		</div>
    </body>
    <h1></h1><h1></h1>
    @endsection
