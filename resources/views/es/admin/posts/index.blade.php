<x-es.layout :title="'Dashboard'" :stylesheet="'tailwind.min'">
<x-heading :file="'header-bg-1'">Dashboard</x-heading>
<!--Forms-->
<section class="dashboard">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <h1 class="heading-title">Forms</h1>
                        <table class="min-w-full divide-y divide-gray-2">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @if ($forms->count() < 1)
                                    <p class="heading-title">No forms yet</p>
                                @endif
                                @foreach ($forms as $form)
                               <tr>
                                <td class="px-9 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                        <div class="text-3xl font-medium text-gray 900">
                                            <a href="/forms/submit/download/{{$form->id}}">
                                            {{$form->title}}
                                            </a>
                                        </div>
                                </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-3xl font-medium">
                                    <a href="/forms/{{$form->id}}" class="text-blue-500 hover:text-blue-600">View</a>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-3xl font-medium">
                                    <!-- <a href="/forms/submit/{{$form->id}}/edit" class="text-blue-500 hover:text-blue-600">Delete</a> -->
                                    <form action="/forms/submit/{{$form->id}}" method="POST">
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
<!--Posts
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <br>
                        <br>
                        <h1 class="heading-title">Posts</h1>
                        <table class="min-w-full divide-y divide-gray-2">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @if ($posts->count() < 1)
                                    <p class="heading-title">No posts yet <br> please check back later.</p>
                                @endif
                                @foreach ($posts as $post)
                               <tr>
                                <td class="px-9 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                        <div class="text-3xl font-medium text-gray 900">
                                            <a href="/posts">
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
        </div>-->
</section>
</x-es.layout>