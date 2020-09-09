<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedules;

class ScheduleController extends Controller
{
    public function home(){
            $schedule = Schedules::all();
            return view('admin_movie_schedule',['schedule' => $schedule]);
          }


     public function destroy(Schedules $schedule) {
        $schedule->delete();
        return redirect()->route('schedule')
                        ->with(['failure','Schedule deleted successfully']);
    }

}




