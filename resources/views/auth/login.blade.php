@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center py-12 px-4">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg overflow-hidden border border-gray-100">
        <div class="bg-emerald-800 text-white px-6 py-4 font-bold text-lg">
            Login Akun
        </div>
        <div class="p-6">
            <form method="POST" action="{{ route('login.store') }}">
                @csrf

                <!-- Input Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-600 @error('email') border-red-500 @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Input Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-600 @error('password') border-red-500 @enderror" id="password" name="password" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="mb-4">
                    <button type="submit" class="w-full bg-emerald-800 text-white py-2 px-4 rounded-md hover:bg-emerald-700 transition font-medium">
                        Login
                    </button>
                </div>
            </form>

            <!-- Link Register -->
            <div class="mt-4 text-center text-sm text-gray-600">
                <p>Belum punya akun? <a href="{{ route('register') }}" class="text-emerald-700 font-semibold hover:underline">Daftar di sini</a></p>
            </div>
        </div>
    </div>
</div>
@endsection