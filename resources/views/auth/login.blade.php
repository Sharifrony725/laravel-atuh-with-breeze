@extends('layout.app')

@section('content')
    <div class="flex justify-center">

        <div class="w-4/12 bg-white rounded-lg p-6">
            <form  action="{{ route('login') }}" method="POST">
                @csrf
                <h2 class="text-center mb-5 text-3xl font-bold">Please Login</h2>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" id="email" placeholder="Your email" class="bg-gray-100 border-2 rounded-lg w-full p-4 @error('email')
                border-red-500
                @enderror">
                @error('email')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 rounded-lg w-full p-4 @error('password')
                border-red-500
                @enderror">
                @error('password')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <div>
                    <input type="checkbox" name="remember" class="mr-2">
                    <label for="remember">Remember me?</label>
                </div>
            </div>
            <div>
                <button type="submit" class="btn bg-blue-500 text-white px-4 py-3 font-medium w-full rounded-lg">Login</button>
            </div>
            </form>
              @if(session('status'))
                <div class=" text-red-500 p-4 rounded-lg mt-6 text-center">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
@endsection
