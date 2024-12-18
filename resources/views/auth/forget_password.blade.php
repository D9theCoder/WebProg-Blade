@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Reset Password</title>
</head>
<body class="h-full" style="background-color: #eae8e0">
  <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Reset your password
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          Or
          <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
            sign in to your account
          </a>
        </p>
      </div>
      @if(session('success'))
        <div class="text-center">
          <h3 class="text-xl font-bold text-gray-900">Please check your email for password reset</h3>
          <p class="mt-2 text-sm text-gray-600">
            Make sure to check your spam folder if you don't see the email in your inbox. The link will expire in 60 minutes.
          </p>
        </div>
      @else
        <form class="mt-8 space-y-6" action="{{ route('password.email') }}" method="POST">
          @csrf
          <div class="space-y-1">
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
              <input id="email" name="email" type="email" required
                class="appearance-none relative block w-full px-3 py-2 border rounded-md focus:outline-none focus:z-10 sm:text-sm mt-1
                {{ $errors->has('email') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500' }}"
                placeholder="Email address"
                value="{{ old('email') }}">
              @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div>
            <button type="submit"
              class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Send Password Reset Link
            </button>
          </div>
        </form>
      @endif
    </div>
  </div>
</body>
</html>