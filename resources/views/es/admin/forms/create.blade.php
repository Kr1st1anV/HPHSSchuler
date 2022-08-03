<x-es.layout :stylesheet="'login'" :title="'Enviar Forma'">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="form-container">
    <form action="/es/forms/submit" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <h3>Enviar Forma</h3>
        <x-es.form.input name="title" label="Titulo"/>
        <x-es.form.input name="form" type="file" label="Forma"/>
        <x-es.form.input name="description" label="Descripcion"/>
        <x-form.button>Enviar</x-form.button>
    </form>
</div>
</x-es.layout>