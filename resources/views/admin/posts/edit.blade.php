<x-layout :stylesheet="'login'" :title="'Edit Post'">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="form-container">
    <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Edit Post</h3>
        @method('PATCH')

        <x-form.input name="title" :value="old('title', $post->title)"/>
        <div class="flex mt-6">
            <div class="flex-1">
                <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"/>
            </div>

            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="125">
        </div>
        <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
        <x-form.textarea name="english">{{ old('english', $post->english) }}</x-form.textarea>
        <x-form.textarea name="spanish">{{ old('spanish', $post->spanish) }}</x-form.textarea>

        <x-form.button>Update</x-form.button>
    </form>
</div>
</x-layout>