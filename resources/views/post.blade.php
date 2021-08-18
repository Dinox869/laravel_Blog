<x-links>
    <main class=" space-y-6">
        <article class="">

            <div class="w-full bg-center bg-cover h-95 " style="background-image: url('/storage/{{$post->thumbnail}}');">
                <div class=" lg:text-center flex h-full w-full items-center lg:pt-14 mb-4">
                    <div class="items-center max-w-4xl mx-auto">
                        <h1 class="font-bold text-5xl mb-10 text-white lg:text-6xl">{{$post->title}}</h1>
                        <div class="flex items-center lg:justify-center text-sm ">
                            <img src="/images/lary-avatar.svg" alt="lary">
                            <div class="ml-3 text-left">
                                <h2 class="font-bold text-white text-xl">
                                    {{$post->author->name}}
                                </h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-span-8 max-w-4xl mx-auto">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href="/home"
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
                        Back to Posts
                    </a>
                </div>

                <p class="mt-4 block text-gray-400 mb-7 text-xs">
                    Published <time>{{$post->created_at->diffForHumans()}}</time>
                </p>
                <div class="space-y-4 lg:text-lg leading-loose">
                    <p>{{$post->body}}</p>
                </div>

                @auth
                @if(\Illuminate\Support\Facades\Auth::user()->admin === 1)
                <div class="mt-10 space-x-2 flex block justify-between">
                    <a href="/blog/delete/{{$post->slug}}" class="text-xs text-black-200 hover:text-red-300 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Delete Post
                    </a>

                    <a href="/post/{{$post->slug}}" class="text-xs text-black-200 hover:text-blue-300 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Update Post
                    </a>
                </div>
                @endif
                @endauth
            </div>

        </article>
    </main>
</x-links>
