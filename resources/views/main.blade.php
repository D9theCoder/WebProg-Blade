<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Dynamic Map Layout</title>
    <style>
        :root {
            --navbar-height: 64px;
            --map-top-gap: 36px;
            --left-popup-top: 130px;
            --left-popup-fullscreen-top: 30px;
            --left-popup-width: 300px;
        }
        
        .navbar-hidden {
            transform: translateY(-100%);
        }
        .navbar-visible {
            transform: translateY(0);
        }
        .navbar-transition {
            transition: transform 0.3s ease-in-out;
        }
        #map-container {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            transition: top 0.3s ease-in-out;
        }
        .map-with-navbar {
            top: calc(var(--navbar-height) + var(--map-top-gap));
        }
        .map-fullscreen {
            top: 0;
        }
        #leftPopup {
            position: fixed;
            left: 20px;
            width: var(--left-popup-width);
            max-width: 100%;
            transition: top 0.3s ease-in-out, width 0.3s ease-in-out;
            z-index: 1000;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var lastScrollTop = 0;
            var navbar = document.querySelector('header');
            var mapContainer = document.getElementById('map-container');
            var leftPopup = document.getElementById('leftPopup');
            var threshold = 50;

            function updateLayout() {
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                if (scrollTop > threshold) {
                    // Scrolled down
                    navbar.classList.remove('navbar-visible');
                    navbar.classList.add('navbar-hidden');
                    mapContainer.classList.remove('map-with-navbar');
                    mapContainer.classList.add('map-fullscreen');
                    leftPopup.style.top = getComputedStyle(document.documentElement).getPropertyValue('--left-popup-fullscreen-top');
                } else {
                    // At top or scrolled up
                    navbar.classList.remove('navbar-hidden');
                    navbar.classList.add('navbar-visible');
                    mapContainer.classList.remove('map-fullscreen');
                    mapContainer.classList.add('map-with-navbar');
                    leftPopup.style.top = getComputedStyle(document.documentElement).getPropertyValue('--left-popup-top');
                }
                
                lastScrollTop = scrollTop;
            }

            // Call updateLayout on page load
            updateLayout();

            // Call updateLayout on scroll
            window.addEventListener('scroll', updateLayout);

            // Call updateLayout when the popup is opened
            function onPopupOpen() {
                updateLayout();
            }

        });
    </script>
</head>
<body class="h-full" style="background-color: #eae8e0">
    <x-header class="fixed top-0 left-0 right-0 z-50 navbar-visible navbar-transition" />
    <main class="h-full">
        <div id="map-container" class="map-with-navbar">
            <x-map-page />
        </div>
        <div id="leftPopup">
            <!-- Your left popup content goes here -->
        </div>
    </main>
</body>
</html>