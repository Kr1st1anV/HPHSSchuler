<x-es.layout :stylesheet="'login'" :title="'Register'">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="form-container">
    <form action="/es/register" method="POST">
        @csrf
        <h3>Registro</h3>
        <x-form.input name="name"/>            
        <x-form.input name="username"/>
        <x-form.input name="email" type="email" autocomplete="username"/>
        <x-form.number name="phone_number" type="tel"/>
        <x-form.input name="password" type="password" autocomplete="new-password"/>
        <x-form.button>Enviar</x-form.button>
        <p>Ya tienes una accounta? <a href="/es/login">Ingresa</a></p>
    </form>
</div>
</x-es.layout>