<x-layout :title="'Viewing Form'" :stylesheet="'tailwind.min'">
<x-heading :file="'header-bg-2'">{{$form->title}}</x-heading>
    <section class="py-8">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-12">
                    <!--<div class="hidden lg:flex justify-between mb-6">
                        <a href="/admin/posts"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Dashboard
                        </a>
                    </div>-->
                    <div class="flex items-center lg:justify-center text-3xl mt-4">
                    <p class="text-gray-600 text-3xl">
                        Published <time>{{ $form->created_at->diffForHumans()}} by:</time>
                    </p>
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                {{$form->author->name}}
                            </h5>
                        </div>
                    </div>
                    <div class="lg:pt-14 mb-10">
                    <img src="{{ asset('storage/' . $form->form)}}" alt="" class="rounded-xl" width="800" height="1200">
                </div>
                    <div class="space-y-4 lg:text-3xl leading-loose">
                        <h3>Description: </h3><br>{!! $form->description !!}
                    </div>
                </div>
            </article>
        </main>
    </section>
</body>
</x-layout>