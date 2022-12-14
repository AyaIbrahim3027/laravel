<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){

        $users= User::all();
        //dd($users);
        return view ('users.index')->with(['users' => $users]);

        // return view('user.index', [
        //     'users' => User::table('users')->paginate(15)
        // ]);
        

        //$users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true); 
        //return view('users.index',['users' => $users]); 
    }

    function create(){
        return view('users.create') ; 
    }


    function show($id){
        $user= User::find($id);
        return view('users.show')->with(['users' => $user ]) ;       
    }


    function store(Request $request){

       // $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true); 
        //return view('users.index',['users' => $users]); 
        $request->all();
        $user = new User([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'password'=> $request->get('password'),
        ]);
         $user->save();
         return 'success user has been stored';
        
    }

    function edit($id){
        $user=User::find($id);  
        return view('users.edit')->with(['user' => $user]) ;
    
    }

    function update($id , Request $request){
        $request->only('name','email');
        User::where('id',$id)->update([
        'name' =>$request['name'],
        'email' =>$request['email']
       ]);

       return 'success user has been updated';

        
    }
    function destroy($id){

        User::where('id', $id)->delete();
        return 'success user has been deleted';
        // $user = User::find($id);
        // $user->delete();
       
       // return redirect()->route('users.index');
        //return view('users.destroy') ;
        // return "Remove the specified resource with id {{$id}}
        // from storage.";

    }
}