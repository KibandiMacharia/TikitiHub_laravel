@extends('layouts.admin_layout')

@section('stylesheets')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
 <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Movie Schedules</h6>
        </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

  

      <table id="datatableid" class="table table-bordered table-dark">
        <tr>
                             <th scope="col">ID</th>
                            <th scope="col">Movie Name</th>
                            <th scope="col">Cinema Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Ticket Cost</th>
                          

        </tr>
         @if(count($schedule) > 0)
        @foreach($schedule->all() as $schedules)
        <tr>
            <td>{{$schedules['id'] }}</td>
            <td>{{ $schedules['movie_title'] }}</td>
            <td>{{ $schedules['cinema_name'] }}</td>
            <td>{{ $schedules['date'] }}</td>
            <td>{{ $schedules['time'] }}</td>
            <td>{{ $schedules['ticket_cost'] }}</td>
          
            <td>

                <form action="{{ route('schedule.destroy',$schedules->id) }}" method="POST">   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
         @endif
    </table>
  
    
    
                                </div>


@endsection
