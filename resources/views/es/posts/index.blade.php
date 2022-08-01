<x-es.layout :title="'Publicaciones'">
   
<x-heading :file="'header-bg-3'">Publicaciones</x-heading>
<section class="packages">
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
</section>

</x-es.layout>