<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consideration;
use Illuminate\Support\Facades\Auth;

class ConsiderationController extends Controller
{
    public function index(Consideration $consideration)
    {
        return view('considerations.index')->with(['considerations' => $consideration->get()]);  
    }
    public function create()
    {
        return view('considerations.create');
    }
    public function store(Request $request, Consideration $consideration)
    {
        
        $id = Auth::id();
        //$input = ['user_id'=>$id,'title'=>$request->title, 'parent_id'=>0,'child_id'=>0,'comment'=>$request->comment ,'consideration_evaluation'=>0]; 
        $input = $request['consideration'];
        $consideration->title = $input['title'];
        $consideration->comment = $input['comment'];
        $consideration->user_id = $id;
        $consideration->parent_id = 0;
        $consideration->child_id = 0;
        $consideration->consideration_evaluation = 0;
        $consideration->save();
        return redirect('/considerations/');
    }
    public function show(Consideration $consideration)
    {
        return view('considerations.show')->with(['consideration' => $consideration]);
    }
}
