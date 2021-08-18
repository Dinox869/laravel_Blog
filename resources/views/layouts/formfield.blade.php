<x-links>
    <section class="py-4 px-8 bg-gray-100 min-h-screen">
        <div class="justify-content-center ">
            <h1 class="font-bold text-xl text-center mb-10 ">CREATE POSTs</h1>
            <div class="max-w-6xl py-5  mx-auto">
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
                    Back to posts
                </a>
            </div>
            <div class="bg-white shadow-md rounded-xl px-8 pt-6 pd-8 mb-4 flex flex-col max-w-6xl mx-auto ">
                <form method="post"  action="/post/store"  enctype="multipart/form-data" >
                @csrf
                    <!-- title -->
                    <div class="mb-4">
                        <label for="title" class="block text-grey-darker text-sm font-bold mb-2">Title</label>
                        <input id="title" value="{{old('title')}}"  name="title" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
                        @error('title')
                        <span class="text-sm text-red-500 font-italic mt-1">
                    {{ $message }}
                </span>
                        @enderror
                    </div>

                    <!-- slug -->
                    <div class="mb-4" >
                        <label for="slug" class="block text-grey-darker text-sm font-bold mb-2">Slug</label>
                        <input id="slug"  value="{{old('slug')}}" name="slug" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
                        @error('slug')
                        <span class="text-sm text-red-500 font-italic mt-1">
                    {{ $message }}
                </span>
                        @enderror
                    </div>

                    <!-- thumbnail -->
                    <div class="mb-4">
                        <label for="thumbnail" class="block text-grey-darker text-sm font-bold mb-2">thumbnail</label>
                        <input id="thumbnail"  value="{{old('thumbnail')}}" name="thumbnail" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
                        @error('thumbnail')
                        <span class="text-sm text-red-500 font-italic mt-1">
                    {{ $message }}
                </span>
                        @enderror
                    </div>

                    <!-- excerpt -->
                    <div class="mb-4">
                        <label for="excerpt" class="block text-grey-darker text-sm font-bold mb-2">Excerpt</label>
                        <input id="excerpt"   value="{{old('excerpt')}}" name="excerpt" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
                        @error('excerpt')
                        <span class="text-sm text-red-500 font-italic mt-1">
                    {{ $message }}
                </span>
                        @enderror
                    </div>

                    <!-- body -->
                    <div class="mb-4">
                        <label for="body" class="block text-grey-darker text-sm font-bold mb-2">Body</label>
                        <textarea id="body"
                                  name="body"
                                  class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                        >{{old('body')??''}}
                        </textarea>
                        @error('body')
                        <span class="text-sm text-red-500 font-italic mt-1">
                    {{ $message }}
                </span>
                        @enderror
                    </div>

                    <div class="mb-5 block justify-content-start text-grey-darker text-sm font-bold ">
                        Choose category <x-category-search/>
                        @error('category_id')
                        <span class="text-sm text-red-500 font-italic mt-1">
                    {{ $message }}
                </span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-content-start">
                        <button class="bg-gray-200 mb-5 hover:bg-gray-300 text-white font-bold text-sm py-2 px-4 rounded-full" type="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-links>
