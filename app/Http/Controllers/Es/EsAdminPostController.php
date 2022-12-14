<?php

namespace App\Http\Controllers\Es;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Notifications\PostNotifications;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
class EsAdminPostController extends Controller
{
    public function index() 
    {
        return view('es.admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    public function create() 
    {
        return view('es.admin.posts.create');
    }

    public function store() 
    {
        App::setLocale('es');
        Post::create(array_merge($this->validatePost(), [
            'user_id' => request()->user()->id,
            'slug' => Str::slug(request()->post("title")),
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));

        $users = User::all();

        return redirect('/es/posts');
    }
    
    public function edit(Post $post) 
    {
        return view('es.admin.posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        App::setLocale('es');
        $attributes = $this->validatePost($post);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post deleted!');
    }

    protected function validatePost(?Post $post = null): array
    {
        App::setLocale('es');
        $post ??= new Post();

        return request()->validate([
            'title' => 'required',
            'thumbnail' => $post-> exists ? ['image'] : ['required','image'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }

}
