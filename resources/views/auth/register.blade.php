<x-links>
    <div class="h-screen bg-cover" style="background: url('http://bit.ly/2gPLxZ4'); background-repeat: no-repeat; background-size: cover;">
        <nav class="md:flex  md:justify-between md:items-center">
            <div>
                <a href="/"><img src="./images/logo.svg" alt="laracast" width="165" height="16"></a>
            </div>

            <div class ="mt-12 md:mt-0  space-x-5 mr-10">
                <a href="{{ route('login') }}" class="text-sm text-white font-bold">Login</a>

                <a href="/home" class="text-sm text-red-500 font-bold">Back</a>
            </div>
        </nav>
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
            <div class="w-full max-w-lg">
                <div class="leading-loose">
                    <form method="POST" action="{{ route('register') }}" class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl">
                        @csrf
                        <p class="text-white font-medium text-center text-lg font-bold">REGISTER</p>

                        <div class="">
                            <label class="block text-sm text-white" for="name">Name</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="text" id="name" name="name" placeholder="" aria-label="name" value="{{old('name')}}" autocomplete="name" required>
                            @error('name')
                            <span class="text-red-300 text-xs">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label class="block text-sm text-white" for="name">UserName</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="text" id="name" name="username" placeholder="" aria-label="username" value="{{old('username')}}" autocomplete="username" required>
                            @error('username')
                            <span class="text-red-300 text-xs">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label class="block text-sm text-white">E-mail</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email" id="email" placeholder="" name="email" aria-label="email" value="{{old('email')}}" required>
                            @error('email')
                            <span class="text-red-300 text-xs">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label class="block text-sm text-white">Password</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="password" id="password" placeholder="" name="password" aria-label="password" required>
                            @error('password')
                            <span class="text-red-300 text-xs">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label class="block text-sm text-white">Confirm Password</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="password" name="password_confirmation" id="password-confirm" placeholder="" aria-label="password"  autocomplete="new-password" required>
                            @error('password-confirm')
                            <span class="text-red-300 text-xs">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="mt-10 items-center flex justify-between">
                            <button class="px-4 py-1 text-white font-weight-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded" type="submit">Enter</button>
                            <div class="w-14 block space-x-5">
                                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-red hover:text-blue-400" href="{{ route('password.request') }}"> Forgot password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-links>
