<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')
        
        //->count();

          //  ->orderBy('city')             //ascending
          //  ->orderBy('city', 'desc')        //deascending

        //   ->limit(2)
        //  ->offset(1)

        //->where('city','CTG')
       // ->where('age', '>', 10)

      //      ->where([
      //         ['city', '=','CTG'],
      //         ['age', '>', 10]
      //  ])

              // ->where('city', '=','CTG')
              //  ->orWhere('age', '>', 50)
         
        //->where('name','like','A%')

   ->get();

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

    public function adduser(){

      $user =DB::table('users')
                      ->insertOrIgnore([                     //insert code

                        //->upsert([                         //update code
                          'name' => 'Ariyan',
                          'email' => 'ariyan@gmail.com',
                          'age' => 15,
                          'city' => 'CTG',
                          'created_at' => now(),
                          'updated_at' => now()

                      ],
                     ['email']                                //update code
                    );
                  if($user){
                     echo"<h2>Data inserted successfully.</h2>";

                  }    else{
                        echo "<h2>Data not added</h2>";

                  }
    }
}
