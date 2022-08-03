<x-layout :stylesheet="'login'" :title="'Submit Form'">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="form-container">
    <form action="/forms/submit" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <h3>Submit Form</h3>
        <x-form.input name="title"/>
        <x-form.input name="form" type="file"/>
        <x-form.textarea name="description"/>
        <x-form.button>Submit</x-form.button>
    </form>
</div>
</x-layout>