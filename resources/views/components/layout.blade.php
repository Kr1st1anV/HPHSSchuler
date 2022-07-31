@props(['stylesheet' => 'app', 'title'])

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>{{$title}}</title>
   <link rel="icon" type="image/png" sizes="16x16" href="/images/logo.svg">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/css/app.css">
   <link rel="stylesheet" href="/css/{{$stylesheet}}.css">
   
   <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

   <meta name="description" content="The HPHS Schuler App will keep you updated on the latest news thorugh posts, notifications, and reminders on the calendar.">

   @laravelPWA

</head>
<body>
  @csrf

<section class="header">

   <a href="/" class="schuler-logo"><img src="/images/logo.svg" alt="Schuler Logo"></a>
   <nav class="navbar">
      <a href="/">Home</a>
      <a href="/calendar">Calendar</a>
      <a href="/about-us">About Us</a>
      <a href="/posts">Posts</a>
      @auth
        @admin
          <a href="/admin/posts">Dashboard</a>
          <a href="/admin/posts/create">New Post</a>
        @endadmin
        <a href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</a>
        <form id="logout-form" action="/logout" method="post" class="hidden">
            @csrf 
        </form>
      @else
      <a href="/register">Register</a>
      <a href="/login">Log In</a>
      @endauth
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


{{ $slot }}

<section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Navigate To</h3>
        <a href="/"><i class="fas fa-angle-right"></i> Home </a>
        <a href="/calendar"><i class="fas fa-angle-right"></i> Calendar </a>
        <a href="/about"><i class="fas fa-angle-right"></i> About Us </a>
        <a href="/posts"><i class="fas fa-angle-right"></i> Posts </a>
      @auth
        @admin
        <a href="/admin/posts/dashboard"><i class="fas fa-angle-right"></i> Dashboard </a>
        <a href="/admin/posts/create"><i class="fas fa-angle-right"></i> New Posts </a>
        @endadmin
      @else
      <a href="/register"><i class="fas fa-angle-right"></i> Register </a>
      <a href="/login"><i class="fas fa-angle-right"></i> Log In </a>
      @endauth
      </div>
      <!--<div class="box">
        <h3>Extra Links</h3>
        <a href="#"><i class="fas fa-angle-right"></i> Ask Questions </a>
        <a href="#"><i class="fas fa-angle-right"></i> About Us </a>
        <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy </a>
        <a href="#"><i class="fas fa-angle-right"></i> Terms of User </a>
      </div>-->
      <div class="box">
        <h3>Contact Info</h3>
        <a href="tel:224-765-2000"><i class="fas fa-phone"></i> +1 (224) 765-2000 </a>
        <a href="tel:817-909-0215"><i class="fas fa-phone"></i> +1 (817) 909-0215 </a>
        <a href="mailto:cheryls@schulerprogram.org"><i class="fas fa-envelope"></i> cheryls@schulerprogram.org </a>
        <a href="https://www.google.com/maps/place/Highland+Park+High+School/@42.1926722,-87.8035443,17z/data=!3m2!4b1!5s0x880fc1b8e92f2a23:0xd72b4ad49aaa2cb7!4m5!3m4!1s0x880fc1b931863511:0x200dc0454edb946!8m2!3d42.1926682!4d-87.8013556"><i class="fas fa-map"></i> 433 Vine Ave, Highland Park, IL </a>
      </div>
      <div class="box">
        <h3>Follow Us</h3>
        <a href="https://www.facebook.com/HPHSschulerscholars/"><i class="fab fa-facebook-f"></i> Facebook </a>
        <a href="https://twitter.com/SchulerScholar"><i class="fab fa-twitter"></i> Twitter </a>
        <a href="https://www.instagram.com/hphsschulerprogram/"><i class="fab fa-instagram"></i> Instagram </a>
        <a href="https://www.linkedin.com/company/schuler-scholar-program"><i class="fab fa-linkedin"></i> Linkedin </a>
      </div>
    </div>

    <div class="credit">Created by <span>Kristian Velazquez</span> | Schuler Scholar Micro Intern</div>

</section> 






<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="/js/app.js"></script>
</body>
</html>