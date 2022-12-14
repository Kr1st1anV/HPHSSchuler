<?php

namespace App\Http\Controllers\En;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use DeepCopy\Filter\Filter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

use function PHPUnit\Framework\returnSelf;

class PostController extends Controller
{
    public function index() {
        Artisan::call('storage:link');
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'author'])
                )->paginate(3000)->withQueryString(),
        ]);
        }

    public function show(Post $post) {
        return view('posts.index', [
            'post' =>  $post
        ]);
    }
}
