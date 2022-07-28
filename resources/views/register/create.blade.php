<x-layout :stylesheet="'login'" :title="'Register'">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="form-container">
    <form action="/register" method="POST">
        <h3>Register</h3>
         @csrf
        <x-form.input name="name"/>            
        <x-form.input name="username"/>
        <x-form.input name="email" type="email" autocomplete="username"/>
        <x-form.number name="phone_number" type="tel"/>
        <x-form.input name="password" type="password" autocomplete="new-password"/>
        <x-form.button>Submit</x-form.button>
        <p>Already have an account? <a href="/login">Log In here</a></p>
    </form>
</div>
</x-layout>