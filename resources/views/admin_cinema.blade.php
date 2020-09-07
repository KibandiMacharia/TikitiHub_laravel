@extends('layouts.admin_layout')

@section('stylesheets')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
 <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Cinema</h6>
        </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

  

      <table id="datatableid" class="table table-bordered table-dark">
        <tr>
                             <th scope="col">ID</th>
                            <th scope="col">Cinema Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Action</th>

        </tr>
         @if(count($cinemas) > 0)
        @foreach($cinemas->all() as $cinema)
        <tr>
            <td>{{$cinema['id'] }}</td>
            <td>{{ $cinema['cinema_name'] }}</td>
            <td>{{ $cinema['location'] }}</td>
            <td>

                <form action="{{ route('cinemas.destroy',$cinema->id) }}" method="POST">   
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
                <a class="btn btn-success" href="/admin/cinema/create"> Add cinema</a>
            </div>
                                </div>


@endsection
