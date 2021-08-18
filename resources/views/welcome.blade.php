<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>DINOX</title>
</head>
<body style="font-family: Open Sans, sans-serif" >
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/home"><img src="./images/logo.svg" alt="laracast" width="165" height="16"></a>
            </div>

            <div class ="mt-8 md:mt-0">
{{--                <a href="/home" class="text-xs font-bold">Nobie steps</a>--}}
                @if (Route::has('login'))
                @auth
                        @if(\Illuminate\Support\Facades\Auth::user()->admin === 1)
                            <a href="/blog/create" class="ml-4 text-sm font-italic text-gray-700 hover:text-blue-600">Create Post</a>
                        @endif
                    <a href="/logout" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white py-3 px-6">Log out</a>
                @else
                    <a href="{{ route('login') }}" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white py-3 px-6">Log in</a>

                @endauth
                @endif

            </div>
        </nav>
        <x-headers/>

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
           <x-article-post :posts="$posts"/>
        </main>

        <x-footers/>
    </section>
</body>
</html>
