<x-es.layout :stylesheet="'login'" :title="'Log In'">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="form-container">
    <form action="/es/login" method="POST">
        @csrf
        <h3>Ingresar</h3>
        <x-form.input name="email" type="email" autocomplete="username"/>
                <x-form.input name="password" type="password" autocomplete="new-password"/>
                <x-form.button>Ingresar</x-form.button>
        <p>No tienes una accuenta? <a href="/es/register">Registro</a></p>
    </form>
</div>
</x-es.layout>