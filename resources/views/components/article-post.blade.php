<div>
    @if($posts->count()>0)

            <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5 lg:flex">
                    <div class="flex-1 lg:mr-8">
                        <img src="./storage/{{$posts[0]->thumbnail}}" alt="Blog Post Illustration" class="rounded-xl">
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">
                                <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs font-semibold">Techniques</a>

                                <a href="#" class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs font-semibold">Updates</a>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">{{$posts[0]->title}}</h1>

                                <span class="mt-2 block text-gray-400 text-xs"> Published<time>{{ $posts[0]->created_at->diffForHumans() }}</time></span>
                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>{{ $posts[0]->body }}</p>

                            <p class="mt-4">{{ $posts[0]->excerpt }}</p>
                        </div>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="./images/lary-avatar.svg" alt="lary">
                                <h6>Synt.ax at Laracast</h6>
                            </div>

                            <div class="hidden lg:block">
                                <a href="/post/{{$posts[0]->slug}}?page=post" class="transition ease-in-out duration-300 transform hover:-translate-y-3 hover:text-sm bg-gray-100 hover:bg-gray-300  text-xs font-semibold hover:text-blue-300 rounded-full py-2 px-8">Read More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>


            <div class="grid  grid-cols-2">

                @if(isset($posts[1]))
                <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"   >
                    <div class="py-6 px-5">
                        <div>
                            <img src="./storage/{{$posts[1]->thumbnail}}" alt="Blog Post Illustartion" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between ">
                            <header>
                                <div class="space-x-2">
                                    <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">Techniques</a>

                                    <a href="#" class="px-3 py-1 border border-red-300  rounded-full text-red-300  text-xs font-semibold uppercase">Updates</a>

                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        {{ $posts[1]->title }}
                                    </h1>

                                    <span class="mt-2 block text-gray-100 text-xs">Published<time>{{$posts[1]->created_at->diffForHumans()}}</time></span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>{{$posts[1]->body}}</p>

                                <p class="mt-4">{{$posts[1]->excerpt}}</p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./images/lary-avatar.svg" alt="lary avatar">

                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h4>Dinox at Laracasts</h4>
                                    </div>
                                </div>

                                <div>
                                    <a href="/post/{{$posts[1]->slug}}?page=post" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read More</a>
                                </div>
                            </footer>

                        </div>
                    </div>
                </article>
                @endif

                @if(isset($posts[2]))
                <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"   >
                    <div class="py-6 px-5">
                        <div>
                            <img src="./storage/{{$posts[2]->thumbnail}}" alt="Blog Post Illustartion" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">Techniques</a>

                                    <a href="#" class="px-3 py-1 border border-red-300  rounded-full text-red-300  text-xs font-semibold uppercase">Updates</a>

                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        {{$posts[2]->title}}
                                    </h1>

                                    <span class="mt-2 block text-gray-100 text-xs">Published<time>{{$posts[2]->created_at->diffForHumans()}}</time></span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>{{$posts[2]->body}}</p>

                                <p class="mt-4">{{$posts[2]->excerpt}}</p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./images/lary-avatar.svg" alt="lary avatar">

                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h4>Dinox at Laracasts</h4>
                                    </div>
                                </div>

                                <div>
                                    <a href="/post/{{$posts[2]->slug}}?page=post" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read More</a>
                                </div>
                            </footer>

                        </div>
                    </div>
                </article>
                    @endif
            </div>

            <div class="lg:grid lg:grid-cols-3">
                @if(isset($posts[3]))
                      <article class="transition-colors duration-300 hover:bg-gray-100 border border-black hover:border-opacity-5 border-opacity-0 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="./storage/{{$posts[3]->thumbnail}}" alt="Blog Illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex  flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#" class="px-2 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">Technique</a>

                                    <a href="#" class="border border-red-300 text-red-300 rounded-full text-xs uppercase font-semibold px-2 py-1">Updates</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">{{$posts[3]->title}}</h1>

                                    <span class="mt-2 block text-gray-400 text-xs">Published<time>{{$posts[3]->created_at->diffForHumans()}}</time></span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>{{$posts[3]->excerpt}}</p>

                                <p class="mt-4">{{$posts[3]->body}}</p>
                            </div>

                            <footer class="flex justify-between items-center mt-8" >
                                <div class="flex items-cneter text-sm">
                                    <img src="./images/lary-avatar.svg" alt="lary avatar">

                                    <div  class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>

                                        <h6 class="overflow-hidden text-xs">{{$posts[3]->author->name}} at Laracast </h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="/post/{{$posts[3]->slug}}?page=post" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 hover:text-green-200  rounded-full py-2 px-6 ">Read More</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
                @endif

                @if(isset($posts[4]))
                        <article class="transition-colors duration-300 hover:bg-gray-100 border border-black hover:border-opacity-5 border-opacity-0 rounded-xl">
                            <div class="py-6 px-5">
                                <div>
                                    <img src="./storage/{{$posts[4]->thumbnail}}" alt="Blog Illustration" class="rounded-xl">
                                </div>

                                <div class="mt-8 flex  flex-col justify-between">
                                    <header>
                                        <div class="space-x-2">
                                            <a href="#" class="px-2 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">Technique</a>

                                            <a href="#" class="border border-red-300 text-red-300 rounded-full text-xs uppercase font-semibold px-2 py-1">Updates</a>
                                        </div>

                                        <div class="mt-4">
                                            <h1 class="text-3xl">{{$posts[4]->title}}</h1>

                                            <span class="mt-2 block text-gray-400 text-xs">Published<time>{{$posts[4]->created_at->diffForHumans()}}</time></span>
                                        </div>
                                    </header>

                                    <div class="text-sm mt-4">
                                        <p>{{$posts[4]->excerpt}}</p>

                                        <p class="mt-4">{{$posts[4]->body}}</p>
                                    </div>

                                    <footer class="flex justify-between items-center mt-8" >
                                        <div class="flex items-cneter text-sm">
                                            <img src="./images/lary-avatar.svg" alt="lary avatar">

                                            <div  class="ml-3">
                                                <h5 class="font-bold">Lary Laracore</h5>

                                                <h6 class="overflow-hidden text-xs">{{$posts[4]->author->name}} at Laracast </h6>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="/post/{{$posts[4]->slug}}?page=post" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 hover:text-green-200  rounded-full py-2 px-6 ">Read More</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    @endif

                    @if(isset($posts[5]))
                        <article class="transition-colors duration-300 hover:bg-gray-100 border border-black hover:border-opacity-5 border-opacity-0 rounded-xl">
                            <div class="py-6 px-5">
                                <div>
                                    <img src="./storage/{{$posts[5]->thumbnail}}" alt="Blog Illustration" class="rounded-xl">
                                </div>

                                <div class="mt-8 flex  flex-col justify-between">
                                    <header>
                                        <div class="space-x-2">
                                            <a href="#" class="px-2 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">Technique</a>

                                            <a href="#" class="border border-red-300 text-red-300 rounded-full text-xs uppercase font-semibold px-2 py-1">Updates</a>
                                        </div>

                                        <div class="mt-4">
                                            <h1 class="text-3xl">{{$posts[5]->title}}</h1>

                                            <span class="mt-2 block text-gray-400 text-xs">Published<time>{{$posts[5]->created_at->diffForHumans()}}</time></span>
                                        </div>
                                    </header>

                                    <div class="text-sm mt-4">
                                        <p>{{$posts[5]->excerpt}}</p>

                                        <p class="mt-4">{{$posts[5]->body}}</p>
                                    </div>

                                    <footer class="flex justify-between items-center mt-8" >
                                        <div class="flex items-cneter text-sm">
                                            <img src="./images/lary-avatar.svg" alt="lary avatar">

                                            <div  class="ml-3">
                                                <h5 class="font-bold">Lary Laracore</h5>

                                                <h6 class="overflow-hidden text-xs">{{$posts[5]->author->name}} at Laracast </h6>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="/post/{{$posts[5]->slug}}?page=post" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 hover:text-green-200  rounded-full py-2 px-6 ">Read More</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    @endif
            </div>
    @else
        No Post has been found yet !!!
    @endif

</div>
