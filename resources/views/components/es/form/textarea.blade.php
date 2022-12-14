@props(['name'])

<x-form.field>
        <x-form.label name="{{$name}}" />
        <textarea class="box border border-gray-200 p-2 w-full rounded" 
        name="{{$name}}"
        id="{{$name}}"
        required
        {{ $attributes }}
        >{{ old($name) ?? $slot }}</textarea>

        <x-form.error name="{{$name}}"/>
</x-form.field>