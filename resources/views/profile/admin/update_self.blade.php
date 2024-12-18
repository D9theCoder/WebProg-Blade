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
  <title>Document</title>
</head>

<body class="h-full" style="background-color: #eae8e0">
  <x-header />
  <main class="pb-8 max-lg:pt-4">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-6">
      <div class="bg-white p-6 rounded-lg shadow ">
        <header class="bg-white w-full text-2xl font-semibold border-b border-neutral-300 px-6 py-4">
          Update User
        </header>
        <form class="px-6 py-4 text-sm flex flex-col w-full gap-y-6 mt-2"
          action="{{ route('profile.admin.update_self', $user->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="w-full flex flex-row gap-x-4">
            <div class="w-full">
              <label class="font-medium">Username</label>
              <p class="text-xs text-neutral-500 mt-1">Username of the user</p>
            </div>
            <div class="w-full">
              <input value="{{ old('username', $user->username) }}" name="username" type="text"
                class="w-full px-2.5 py-2 border border-neutral-400 hover:border-blue-600 focus:border-blue-700 rounded-lg focus:border focus:outline-offset-4 focus:outline-blue-200" />
              @error('username')
                <span class="text-xs text-red-600">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="w-full flex flex-row gap-x-4">
            <div class="w-full">
              <label class="font-medium">Email</label>
              <p class="text-xs text-neutral-500 mt-1">The user valid email.</p>
            </div>
            <div class="w-full">
              <input value="{{ old('email', $user->email) }}" name="email" type="text"
                class="w-full px-2.5 py-2 border border-neutral-400 hover:border-blue-600 focus:border-blue-700 rounded-lg focus:border focus:outline-offset-4 focus:outline-blue-200" />
              @error('email')
                <span class="text-xs text-red-600">{{ $message }}</span>
              @enderror
            </div>
          </div>
          
          <div class="w-full flex flex-row gap-x-4">
            <div class="w-full">
              <label class="font-medium">Password</label>
              <p class="text-xs text-neutral-500 mt-1">Enter a new password (optional).</p>
            </div>
            <div class="w-full">
              <input name="password" type="password"
                class="w-full px-2.5 py-2 border border-neutral-400 hover:border-blue-600 focus:border-blue-700 rounded-lg focus:border focus:outline-offset-4 focus:outline-blue-200" />
              @error('password')
                <span class="text-xs text-red-600">{{ $message }}</span>
              @enderror
            </div>
          </div>
          
          <div class="w-full flex flex-row gap-x-4">
            <div class="w-full">
              <label class="font-medium">Confirm Password</label>
              <p class="text-xs text-neutral-500 mt-1">Re-enter the new password.</p>
            </div>
            <div class="w-full">
              <input name="password_confirmation" type="password"
                class="w-full px-2.5 py-2 border border-neutral-400 hover:border-blue-600 focus:border-blue-700 rounded-lg focus:border focus:outline-offset-4 focus:outline-blue-200" />
            </div>
          </div>
          <div class="w-full flex border-t border-neutral-300 pt-6">
            <button
              class="text-base ml-auto min-w-20 rounded-lg text-white px-2.5 py-2 bg-blue-500 border border-blue-500 hover:bg-blue-600 hover:border-blue-600 active:bg-blue-700 active:border-blue-600 active:ring-2 active:ring-blue-100"
              type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
