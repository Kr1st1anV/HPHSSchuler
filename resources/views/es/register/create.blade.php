<x-es.layout :stylesheet="'login'" :title="'Register'">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="form-container">
    <form action="/es/register" method="POST">
        @csrf
        <h3>Registro</h3>
        <x-es.form.input name="name" label="nombre"/>            
        <x-es.form.input name="username" label="usario"/>
        <x-es.form.input name="email" type="email" autocomplete="username" label="email"/>
        <x-es.form.number name="phone_number" type="tel" label="número de teléfono"/>
        <x-es.form.input name="password" type="password" autocomplete="new-password" label="contraseña"/>
        <x-form.button>Enviar</x-form.button>
        <p>Ya tienes una accounta? <a href="/es/login">Ingresa</a></p>
    </form>
</div>
</x-es.layout>