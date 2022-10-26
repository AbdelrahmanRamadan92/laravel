<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function index(){
        $users = User::get();
        return view('users.index' ,['users'=>$users]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){

        User::create($request->all());
        return redirect()->route('user.index');    
    }
    public function edit($id){
        $user = User::find($id);
        return view('users.edit' ,['user'=>$user]);

    }
    
    public function update(Request $request ,$id){

        $user = User::find($id);
        $user->update($request->all());
        // dd($user);
        return redirect()->route('user.index');    
    }

    public function show($id){

        $user = User::find($id);
        return view('users.show' ,['user'=>$user]);
    }

    public function delete($id){

        $user = User::find($id);
        $user->delete();
        return back();
    }
}
