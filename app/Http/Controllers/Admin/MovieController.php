<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;

class MovieController extends Controller
{
    public function index()
    {
        return view('admin.movies.movies');
    }

    public function create()
    {
        return view('admin.movies.movie-create');
    }
}
