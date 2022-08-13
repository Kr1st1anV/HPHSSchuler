@props(['posts'])

@if ($posts->count() > 0)                
    @foreach ($posts as $post)
        <x-es.post-card :post="$post"/>  
    @endforeach
@endif