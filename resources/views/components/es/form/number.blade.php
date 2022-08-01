@props(['name'])

<x-form.field>
        <x-form.error name="{{$name}}"/>
        <x-form.label name="Phone Number"/>
        <input class="box" 
        name="{{ $name }}"
        id="{{ $name }}"
        {{$attributes(['value' => old($name)]) }}>
</x-form.field>