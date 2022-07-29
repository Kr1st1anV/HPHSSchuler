<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <link rel="icon" type="image/png" sizes="16x16" href="/images/logo.svg">

   <!-- swiper css link  -->

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/css/app.css">
   

</head>
<body>

<section class="header">

   <a href="/" class="logo"><img src="/images/logo.svg"></a>
   <nav class="navbar">
      <a href="/">Home</a>
      <a href="/calendar">Calendar</a>
      <a href="/about">About Us</a>
      <a href="/posts">Posts</a>
      @auth
        @admin
        <a href="/admin/posts">Dashboard</a>
        <a href="/admin/posts/create">New Post<a>
        @endadmin
        <a href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</a>

        <form id="logout-form" action="/logout" method="post" class="hidden">
            @csrf 
        </form>
      @else
      <a href="/register">Register</a>
      <a href="/login">Log In</a>
      @endauth
      <!-- <a href="Chatroom/index.php" target="_blank">Chat room</a>' -->
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
<section class="dashboard">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-2">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($posts as $post)
                               <tr>
                                <td class="px-9 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                        <div class="text-3xl font-medium text-gray 900">
                                            <a href="/posts/{{$post->slug}}">
                                            {{$post->title}}
                                            </a>
                                        </div>
                                </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-3xl font-medium">
                                    <a href="/admin/posts/{{$post->id}}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-3xl font-medium">
                                    <!-- <a href="/admin/posts/{{$post->id}}/edit" class="text-blue-500 hover:text-blue-600">Delete</a> -->
                                    <form action="/admin/posts/{{$post->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="text-2xl text-red-600">Delete</button>
                                    </form>
                                </td>
                               </tr> 
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</section>
</body>