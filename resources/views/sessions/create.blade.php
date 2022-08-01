<x-layout :stylesheet="'login'" :title="'Log In'">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="form-container">
    <form action="/login" method="POST">
        @csrf
        <h3>Log In</h3>
        <x-form.input name="email" type="email" autocomplete="username"/>
                <x-form.input name="password" type="password" autocomplete="new-password"/>
                <x-form.button>Log In</x-form.button>
        <p>Don't have an account? <a href="/register">Register</a></p>
    </form>
</div>
</x-layout>