<x-layout :title="'Home'">
   
@include ('main._header')

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="./images/014 Jack Schuler_0.jpeg" alt="">
   </div>

   <div class="content">
      <h3>What is Schuler?</h3>
      <p>Schuler partners with Scholars and their families to help Scholars identify, pursue and achieve their academic and professional aspirations. During the high school years, Scholars focus on activities to propel them on their academic journey. After high school, Schuler provides support that helps Scholars flourish in college and beyond. These resources–which are all free to Scholars and their families enable Scholars to create, and follow, a customized roadmap to succeed at highly selective colleges and universities.</p>
      <a href="/about-us" class="btn">About Us</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

 <h1 class="heading-title">Recent Posts</h1>
 <div class="tagembed-container" style=" width:100%;height:100%;overflow: auto;"><div class="tagembed-socialwall" data-wall-id="108424"></div> <script src="//widget.tagembed.com/embed.min.js" type="text/javascript"></script></div>
<div class="load-more"> <a href="/posts" class="btn">View More</a> </div>
</section>

</section>
</x-layout>