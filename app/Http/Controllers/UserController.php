<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')->get();
        //$users = DB::table('users')->where('id',2)->get();
        //$users = DB::table('users');
        //return $users;
        //dd($users);
        //dump($users);
      return view('allusers',['data' => $users]);

    }
    public function singleUser(string $id){
    $user = DB::table('users')->where('id',$id)->get();
    return view('user',['data' => $user]);

    }
}
