<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class usersController extends Controller
{
    public function index(){
        $users = DB::select('SELECT * FROM `users`');
        return view('users',['users'=>$users]);
    }

    public function destroy($id) {
        DB::delete('delete from users where id = ?',[$id]);
        echo "Record deleted successfully.";
        return back();
    }

    public function show($id) {
        $users = DB::select('select * from users where id = ?',[$id]);
        return view('AdminEditUsers',['users'=>$users]);
        }

    public function edit(Request $request,$id) {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $usertype = $request->input('usertype');
        DB::update("update users set usertype='$usertype' where id = '$id'");
        echo "Record updated successfully.";
        return redirect('users');
    }
}
