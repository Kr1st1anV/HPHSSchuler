<x-es.layout :stylesheet="'login'" :title="'Ingresar'">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="form-container">
    <form action="/es/login" method="POST">
        @csrf
        <h3>Ingresar</h3>
        <x-form.input name="email" type="email" autocomplete="username"/>
        <x-es.form.input name="password" type="password" autocomplete="new-password" label="contraseña"/>
        <x-form.button>Ingresar</x-form.button>
        <p>No tienes una cuenta? <a href="/es/register">Registro</a></p>
    </form>
</div>
</x-es.layout>