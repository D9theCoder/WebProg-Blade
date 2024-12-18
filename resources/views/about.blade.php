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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>About Us - Our Team</title>
</head>
<body class="h-full" style="background-color: #eae8e0">
    <x-header />
    <main>
        @if(session('success'))
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            </div>
        @endif
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <x-about-page :team="[
                [
                    'name' => 'Kevin Purnomo',
                    'role' => 'Full Stack Developer',
                    'image' => asset('team/kevin.jpg'),
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ],
                [
                    'name' => 'Pierre Adrian',
                    'role' => 'UX Designer',
                    'image' => asset('team/pier.jpg'),
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ],
                [
                    'name' => 'Timothy Paendong',
                    'role' => 'Backend Developer',
                    'image' => asset('team/timot.jpg'),
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ],
                [
                    'name' => 'Sheraldo Halim',
                    'role' => 'Frontend Developer',
                    'image' => asset('team/dodo.jpg'),
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ],
                [
                    'name' => 'Raphaelle Albetho Wijaya',
                    'role' => 'Project Manager',
                    'image' => asset('team/rafa.jpg'),
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ],
            ]" />
        </div>
    </main>
</body>
</html>