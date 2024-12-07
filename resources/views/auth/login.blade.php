@extends('layout.main')

@section('section')
<div class="flex items-center justify-center py-20">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-white">Login</h2>
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                <input type="email" id="email" name="email" required
                    class="block w-full mt-1 px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent">
                @error('email')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password</label>
                <input type="password" id="password" name="password" required
                    class="block w-full mt-1 px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent">
                @error('password')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember"
                    class="w-4 h-4 text-amber-700 border-gray-300 rounded focus:ring-amber-600">
                <label for="remember" class="ml-2 text-sm text-gray-600 dark:text-gray-300">Remember me</label>
            </div>

            <!-- Login Button -->
            <button type="submit"
                class="w-full px-4 py-2 text-sm font-medium text-white bg-amber-700 rounded-md hover:bg-amber-800 focus:outline-none focus:ring-2 focus:ring-amber-600">
                Login
            </button>
        </form>

        <!-- Register Link -->
        <p class="text-sm text-center text-gray-600 dark:text-gray-300">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-amber-700 hover:underline">Sign Up</a>
        </p>
    </div>
</div>

@endsection