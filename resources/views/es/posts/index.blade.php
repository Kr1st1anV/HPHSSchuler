<x-es.layout :title="'Publicaciones'">
   
<x-heading :file="'header-bg-3'">Publicaciones</x-heading>
<section class="packages">
<div class="box-container">
        @if ($posts->count())
            <x-es.posts-grid :posts="$posts" />
            {{$posts->links()}}
        @else 
            <p class="heading-title">Aún no hay publicaciones, vuelve más tarde.</p>
        @endif
    </div>
    @if ($posts->count())
      <div class="load-more"> <a href="/es/posts" class="btn">Ver Más</a> </div>
    @endif
</section>

</x-es.layout>