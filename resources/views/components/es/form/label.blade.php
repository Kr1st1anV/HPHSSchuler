@props(['name', 'label'])
<label  style="font-size: 1.8rem;" class="block mb-1.5 uppercase font-bold text-gray-700" 
        for="{{$name}}"
        >{{ucwords($label)}}
        </label>