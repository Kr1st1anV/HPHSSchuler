<head>
   <meta name="theme-color" content="#ffffff"/>
   <link rel="apple-touch-icon" href="{{ asset('/images/logo.svg') }}">
   <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>
<x-layout :title="'Home'">
   
@include ('main._header')

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="./images/014 Jack Schuler_0.jpeg" alt="">
   </div>

   <div class="content">
      <h3>About Us</h3>
      <p>Schuler partners with Scholars and their families to help Scholars identify, pursue and achieve their academic and professional aspirations. During the high school years, Scholars focus on activities to propel them on their academic journey. After high school, Schuler provides support that helps Scholars flourish in college and beyond. These resources–which are all free to Scholars and their families enable Scholars to create, and follow, a customized roadmap to succeed at highly selective colleges and universities.</p>
      <a href="/about" class="btn">Read More</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

 <h1 class="heading-title">Latests Posts</h1>

    <div class="box-container">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
            {{$posts->links()}}
        @else 
            <p class="heading-title">No posts yet, please check back later.</p>
        @endif
    </div>
    @if ($posts->count())
      <div class="load-more"> <a href="/posts" class="btn">View More</a> </div>
    @endif
</section>

</section>
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
</x-layout>