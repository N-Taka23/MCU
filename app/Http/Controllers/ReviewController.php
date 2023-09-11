<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(Review $review)
    {
        return view('reviews.index')->with(['reviews' => $review->get()]);  
    }
    public function show(Review $review)
    {
        return view('reviews.show')->with(['review' => $review]);  
    }
    
    public function create(Movie $movie)
    {
        return view('reviews.create')->with(['movies' => $movie->get()]);
    }
    
    public function store(Request $request, Review $review)
    {
        
        $id = Auth::id();
        $input = $request['review'];
        $review->movie_id = $input['movie_id'];
        $review->comment = $input['comment'];
        $review->movie_evaluation = $input['movie_evaluation'];
        $review->spoiler = $input['spoiler'];
        $review->user_id = $id;
        $review->parent_id = 0;
        $review->child_id = 0;
        $review->review_evaluation = 0;
        $review->save();
        return redirect('/reviews/');
    }
}
