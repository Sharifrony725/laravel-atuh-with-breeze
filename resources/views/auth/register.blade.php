@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <form class="w-4/12 bg-white rounded-lg p-6" action="{{ route('register') }}" method="POST">
            @csrf
            <h2 class="text-center mb-5 text-3xl font-bold">Register Please!!!</h2>
          <div class="mb-4">
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Your name" class="bg-gray-100 border-2 rounded-lg w-full p-4 @error('name')
            border-red-500
            @enderror">
            @error('name')
                <div class="text-red-500 text-sm mt-2">
                    {{ $message }}
                </div>
            @enderror
          </div>
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
            <label for="password_confirmation" class="sr-only">Password again</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Your password again" class="bg-gray-100 border-2 rounded-lg w-full p-4">
          </div>
          <div>
            <button type="submit" class="btn bg-blue-500 text-white px-4 py-3 font-medium w-full rounded-lg">Register</button>
          </div>
        </form>
    </div>
@endsection
