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
        
        $user_id = Auth::id();
        $input = $request['consideration'];
        $consideration->title = $input['title'];
        $consideration->comment = $input['comment'];
        $consideration->user_id = $user_id;
        $consideration->parent_id = $request->input('parent_id');
        $consideration->child = 0;
        $consideration->consideration_evaluation = 0;
        $consideration->save();

        return redirect('/considerations/');
    }
    public function show($id)
    {
        $consideration = Consideration::find($id);
        $replies = Consideration::where('parent_id', $id)->get();
        
        return view('considerations.show')->with(compact('consideration','replies'));
    }
}
