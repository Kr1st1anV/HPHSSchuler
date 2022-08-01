<x-es.layout :title="'Home'">
   
@include ('es.main._header')

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="./images/014 Jack Schuler_0.jpeg" alt="">
   </div>

   <div class="content">
      <h3>Que es Schuler?</h3>
      <p>Schuler se asocia con los becarios y sus familias para ayudarlos a identificar, perseguir y lograr sus aspiraciones académicas y profesionales. Durante los años de la escuela secundaria, los becarios se enfocan en actividades para impulsarlos en su viaje académico. Después de la escuela secundaria, Schuler brinda apoyo que ayuda a los Scholars a prosperar en la universidad y más allá. Estos recursos, que son gratuitos para los becarios y sus familias, les permiten crear y seguir una hoja de ruta personalizada para tener éxito en colegios y universidades altamente selectivos.</p>
      <a href="/es/about-us" class="btn">Sobre Nosotros</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

 <h1 class="heading-title">Publicaciones Recientes</h1>

    <div class="box-container">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
            {{$posts->links()}}
        @else 
            <p class="heading-title">Aún no hay publicaciones, vuelve a consultar más tarde.</p>
        @endif
    </div>
    @if ($posts->count())
      <div class="load-more"> <a href="/es/posts" class="btn">Ver Más</a> </div>
    @endif
</section>

</section>
</x-es.layout>