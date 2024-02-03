<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\group;


class GroupController extends Controller
{
    public function show(){
        $groups = group::all();
        return view('Home', compact('groups'));
    }
    public function create(){
        return view('Signup');
    }

    public function store(Request $request){
        group::create([
            'Group_name'=>$request-> Group_name,
            'password'=> $request-> password,
            'part'=> $request-> part
        ]);

        return redirect(route('create2'));
    }


}
