<?php

namespace App\Http\Controllers\Api;

use App\Schedules;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function create(Request $request)
    {
        $order = new Schedules();
        $order->movie_title = $request->movie_title;
        $order->cinema_name = $request->cinema_name;
        $order->date = $request->date;
        $order->time = $request->time;
        $order->user_id = auth()->user()->id;
        $order->ticket_cost = $request->ticket_cost;
        $order->save();
        return response()->json([
            'success' => true,
            'message' => 'Ticket Booked',
            'order' => $order
        ]);
    }

    public function orders()
    {
        $orders = Schedules::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
        foreach($orders as $order){
            $order->user;
        }
        
        return response()->json([
            'success' => true,
            'orders' => $orders
        ]);
    }
}
