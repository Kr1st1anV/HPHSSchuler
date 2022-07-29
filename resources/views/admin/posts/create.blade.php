<x-layout :stylesheet="'login'" :title="'New Post'">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="form-container">
    <form action="/admin/posts" method="POST" autocomplete="off" enctype="multipart/form-data">
        <h3>New Post</h3>
        @csrf
        <x-form.input name="title"/>
        <x-form.input name="slug"/>
        <x-form.input name="thumbnail" type="file"/>
        <x-form.textarea name="excerpt"/>
        <x-form.textarea name="body"/>
        <x-form.button>Publish</x-form.button>
    </form>
</div>
</x-layout>