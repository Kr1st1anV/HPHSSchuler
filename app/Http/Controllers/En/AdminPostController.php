<?php

namespace App\Http\Controllers\En;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Post;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Notifications\PostNotifications;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    public function index() 
    {
        Artisan::call('storage:link');
        return view('admin.posts.index', [
            'posts' => Post::paginate(100),
            'forms' => Form::paginate(100)
        ]);
    }

    public function create() 
    {
        return view('admin.posts.create');
    }

    public function store() 
    {
        Post::create(array_merge($this->validatePost(), [
            'user_id' => request()->user()->id,
            'slug' => Str::slug(request()->post("title")),
            'thumbnail' => request()->file('thumbnail')->store('thumbnails'),
        ]));

        $users = User::all();

        return redirect('/posts');
    }
    
    public function edit(Post $post) 
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
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
        $post ??= new Post();

        return request()->validate([
            'title' => 'required|max:255',
            'thumbnail' => $post-> exists ? ['image'] : ['required','image'],
            'slug' => [Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt' => 'required',
            'english' => 'required',
            'spanish' => 'required',
        ]);
    }

}
