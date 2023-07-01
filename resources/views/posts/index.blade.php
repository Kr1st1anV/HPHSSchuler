<x-layout :title="'Posts'">
   
<x-heading :file="'header-bg-3'">Posts</x-heading>
<div class="tagembed-container" style=" width:100%;height:100%;overflow: auto;"><div class="tagembed-socialwall" data-wall-id="108114"></div> <script src="//widget.tagembed.com/embed.min.js" type="text/javascript"></script></div>
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