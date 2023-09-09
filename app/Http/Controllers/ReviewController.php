<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Movie;

class ReviewController extends Controller
{
    public function index(Review $review)
    {
        return view('reviews.index')->with(['reviews' => $review->get()]);  
    }
    public function create(Movie $movie)
    {
        return view('reviews.create')->with(['movies' => $movie->get()]);;
    }
}
