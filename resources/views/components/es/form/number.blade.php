@props(['name', 'label'])

<x-form.field>
        <x-form.error name="{{$name}}"/>
        <x-es.form.label name="Phone Number" label="{{$label}}"/>
        <input class="box" 
        name="{{ $name }}"
        id="{{ $name }}"
        {{$attributes(['value' => old($name)]) }}>
</x-form.field>