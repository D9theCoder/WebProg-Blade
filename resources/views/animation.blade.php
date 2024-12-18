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
    <script>
      // Function to redirect after a delay
      function redirectToMap() {
          setTimeout(function() {
              window.location.href = "/map";
          }, 5000);
      }
      // Call the function when the page loads
      window.onload = redirectToMap;
  </script>
</head>

<body class="h-full" style="background-color: #cececb">
    <main class="flex flex-col justify-center items-center h-screen pb-8 max-lg:pt-48"> 
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8 flex flex-col justify-center items-center"> 
            <!-- Animation Page -->
            <x-animation />

            <!-- Loading -->
            <h class="mt-4 text-l font-semibold text-slate-900">
              Loading...
            </h>

            <!-- Instruction Text -->
            <p class="mt-4 text-sm text-slate-500 font-medium">
                Scroll a bit in map page to hide the navbar
            </p>

            <p class="mt-4 text-sm text-slate-500 font-medium">
                It's Recommend to use a desktop browser for better experience
            </p>
        </div>
    </main>
</body>
</html>