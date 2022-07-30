<?php

namespace App\Http\Controllers\En;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('main.home', [
            'posts' => Post::latest()->filter(
                request(['search', 'author'])
                )->paginate(3)->withQueryString(),
        ]);
    }
}
