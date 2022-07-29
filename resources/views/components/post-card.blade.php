@props(['post'])

<div class="box">
    <div class="image">
    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="image">
    </div>
    <div class="content">
        <p>{{ $post->thumbnail }}</p>
        <h3>{{ $post->title }}</h3>
        <p>{!! $post->body !!}</p>
    </div>
</div>