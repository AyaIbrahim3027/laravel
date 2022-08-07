<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    function index(){
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true); 
        return view('users.index',['users' => $users]); 
    }

    function create(){
        return view('users.create') ;
        
    }
    function show($id){

        return view('users.show' , ['id' => $id]) ;
        
    }
    function store(Request $request){

        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true); 
        return view('users.index',['users' => $users]); 
        
    }
    function edit($name,$email){

        return view('users.edit', ['name' => $name], ['email' => $email]) ;
    
    }
    function update($id){

        return "update works!!" ;
        
    }
    function destroy($id){

        return view('users.destroy') ;

    }
}
