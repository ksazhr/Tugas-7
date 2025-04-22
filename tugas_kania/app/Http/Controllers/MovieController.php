<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Ambil semua data dari tabel `movies`
        return view('index', compact('movies'));
    }
}

