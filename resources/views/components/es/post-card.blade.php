@props(['post'])

<div class="box">
    <div class="image">
    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="image">
    </div>
    <div class="content">
        <h3>{{ $post->title }}</h3>
        <p>{!! $post->spanish !!}</p>
    </div>
</div>