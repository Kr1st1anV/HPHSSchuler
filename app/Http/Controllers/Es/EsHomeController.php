<?php

namespace App\Http\Controllers\Es;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class EsHomeController extends Controller
{
    public function index()
    {
        return view('es.main.home', [
            'posts' => Post::latest()->filter(
                request(['search', 'author'])
                )->paginate(3)->withQueryString(),
        ]);
    }
}
