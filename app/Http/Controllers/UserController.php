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

   //->get();
   ->orderBy('name')
   //->simplePaginate(4);        //for pazination 1 
   ->Paginate(4);               //  for pazination 2

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

    public function adduser(Request $req){

      $user =DB::table('users')
                     // ->insertOrIgnore([                     //check duplicate value
                      //  ->insertGetId([
                        ->insert([
 
                        //->upsert([                         //update code
                          'name' => $req->username,
                          'email' => $req->useremail,
                          'age' => $req->userage,
                          'city' => $req->usercity,
                          'created_at' => now(),
                          'updated_at' => now()

                      ]
                          //['email'],                                //update code
                          //['city']                                  //only city name will update 
                          );
                         // return $user;
                               if($user){
                                return redirect()->route('home');
                             //echo"<h2>Data inserted successfully.</h2>";

                            }    else{
                                echo "<h2>Data not added</h2>";         //incase duplicate value

                  }
                 
    }
    // public function updateUser(){
    //   $user =DB::table('users')
    //   ->where('id',2)
    //   ->update([
    //      'city' => 'Sydny',
    //      'age' => 20
  //      ]);


    // public function updateUser(){
    //   $user =DB::table('users')
    //            ->updateOrinsert(                               //condition update
    //            [
    //             'email' => 'aftab@gmail.com',
    //             'name' => 'Aftab'
    //            ],

    //            [
    //             'age' => 20
    //            ]

    //               );

      
    //   if($user){
    //                echo"<h2>Data updated successfully.</h2>";

    //               }    else{
    //                   echo "<h2>Data not updated</h2>";        

    //     }

    //   }


      // public function updateUser(){
      //   $user =DB::table('users')
      //            ->updateOrinsert(                //update new data after cheking exit or not                         
      //            [
      //             'email' => 'axyz@gmail.com',
      //             'name' => 'xyz',
      //             'city' => 'hawaii'
      //            ],
  
      //            [
      //             'age' => 21
      //            ]
  
      //               );
  
        
      //   if($user){
      //                echo"<h2>Data updated successfully.</h2>";
  
      //               }    else{
      //                   echo "<h2>Data not updated</h2>";        
  
      //     }

      public function updatePage(string $id){

        //$user = DB::table('users')->where('id',$id)->get();
        $user = DB::table('users')->find($id);
        return view('updateuser',['data' => $user]);
         //return $user;

      }


        //   public function updateUser(){                   //increment/decrement age every visit
        //     $user =DB::table('users')
        //              ->where('id', 3)
        //              ->increment('age');
        //              //->increment('age', 3);
        //              //->decrement('age');
               
      
            
        //     if($user){
        //                  echo"<h2>Data updated successfully.</h2>";
      
        //                 }    else{
        //                     echo "<h2>Data not updated</h2>";        
      
        //       }
      
  
        // }


        // public function updateUser(){                   
        //   $user =DB::table('users')
        //            ->where('id', 3)
                   
        //            ->increment('age', 3, ['city' => 'New York']);
                
             
    
          
        //   if($user){
        //                echo"<h2>Data updated successfully.</h2>";
    
        //               }    else{
        //                   echo "<h2>Data not updated</h2>";        
    
        //     }
    
            public function updateUser(Request $req, $id){          //increate multiple column                                   
              $user =DB::table('users')
                       ->where('id', $id)
                       ->update([
                      // ->incrementEach([
                           'name' => $req->username,
                          'email' => $req->useremail,
                          'age' => $req->userage,
                          'city' => $req->usercity,
                         //  'votes' => 1

                       ]);
 
              if($user){
                return redirect()->route('home');
                           //echo"<h2>Data updated successfully.</h2>";
        
                          }    else{
                              echo "<h2>Data not updated</h2>";        
        
                }


      }

      public function deleteUser(string $id){
        $user =DB::table('users')
        ->where('id', $id)
        ->delete();
         
        if($user){
            return redirect()->route('home');

        }

      } 

      public function deleteAllUser(){

        $user = DB::table('users')
                   ->truncate();
      }




}
