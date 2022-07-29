@props(['post'])

<div class="box">
    <div class="image">
        <!--/Users/kristianv/HPHSSchulerApp/storage/app/public-->
    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="image">
    </div>
    <div class="content">
        <h3>{{ $post->title }}</h3>
        <p>{!! $post->body !!}</p>
    </div>
</div>