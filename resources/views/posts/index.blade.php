<x-layout :title="'Posts'">
   
<x-heading :file="'header-bg-3'">Posts</x-heading>
<div class='sk-instagram-feed' data-embed-id='161211'></div><script src='https://widgets.sociablekit.com/instagram-feed/widget.js' async defer></script>
<!-- <section class="packages">
    <div class="box-container">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
            {{$posts->links()}}
        @else 
            <p class="heading-title">No posts yet, please check back later.</p>
        @endif
    </div>
    @if ($posts->count() > 6)
        <div class="load-more"><span class="btn">Load More</span></div>
    @endif
</section> -->

</x-layout>