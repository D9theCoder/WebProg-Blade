<header x-data="{
    isOpen: false,
    activeItem: window.location.pathname === '/' ? 'map' : window.location.pathname.replace('/', ''),
    profileOpen: false
}" class="bg-slate-900 pb-4 pt-2 sticky top-0 z-10">
  <div class="mx-auto max-w-23l px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="relative flex items-center justify-between py-3">

      <!-- Logo -->
      <div class="absolute left-0 flex-shrink-0 lg:static mt-1.5">
        <a href="#" @click="isOpen = !isOpen">
          <span class="sr-only">Your Company</span>
          <img class="h-12 w-auto cursor-pointer" src="{{ asset('logo.png') }}" alt="Your Company">
        </a>
      </div>

      <!-- Right section (hidden by default, shown when isOpen is true) -->
      <div x-show="!isOpen" x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="opacity-0 translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in-out duration-200 transform"
        x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-full"
        class="hidden lg:flex lg:items-center lg:pr-0.5 w-full ml-4">
        <!-- Navigation -->
        <nav class="flex justify-between items-center w-full mt-1.5">
          <div class="flex space-x-4">
            <a href="{{ route('map') }}" @click="activeItem = 'map'; isOpen = false"
              :class="{ 'text-indigo-400': activeItem === 'map', 'text-indigo-100': activeItem !== 'map' }"
              class="px-3 py-2 text-sm font-medium transition-all duration-200 hover:bg-white hover:bg-opacity-10 rounded-md">Map</a>
            <a href="{{ route('information') }}" @click="activeItem = 'information'; isOpen = false"
              :class="{ 'text-indigo-400': activeItem === 'information', 'text-indigo-100': activeItem !== 'information' }"
              class="px-3 py-2 text-sm font-medium transition-all duration-200 hover:bg-white hover:bg-opacity-10 rounded-md">Information</a>
            <a href="{{ route('news.index') }}" @click="activeItem = 'news'; isOpen = false"
              :class="{ 'text-indigo-400': activeItem === 'news', 'text-indigo-100': activeItem !== 'news' }"
              class="px-3 py-2 text-sm font-medium transition-all duration-200 hover:bg-white hover:bg-opacity-10 rounded-md">News</a>
            <a href="{{ route('tips') }}" @click="activeItem = 'tips'; isOpen = false"
              :class="{ 'text-indigo-400': activeItem === 'tips', 'text-indigo-100': activeItem !== 'tips' }"
              class="px-3 py-2 text-sm font-medium transition-all duration-200 hover:bg-white hover:bg-opacity-10 rounded-md">Tips</a>
            <a href="{{ route('about') }}" @click="activeItem = 'about'; isOpen = false"
              :class="{ 'text-indigo-400': activeItem === 'about', 'text-indigo-100': activeItem !== 'about' }"
              class="px-3 py-2 text-sm font-medium transition-all duration-200 hover:bg-white hover:bg-opacity-10 rounded-md">About</a>
            <a href="{{ route('support') }}" @click="activeItem = 'support'; isOpen = false"
              :class="{ 'text-indigo-400': activeItem === 'support', 'text-indigo-100': activeItem !== 'support' }"
              class="px-3 py-2 text-sm font-medium transition-all duration-200 hover:bg-white hover:bg-opacity-10 rounded-md">Support</a>
          </div>

          <div class="flex items-center">
            @auth
              <div class="relative flex items-center space-x-2">

                <!-- Username with Dropdown -->
                <button @click="profileOpen = !profileOpen"
                  class="px-2 py-1 text-sm font-medium text-indigo-100 transition-all duration-200 hover:bg-white hover:bg-opacity-10 rounded-md">
                  {{ Auth::user()->username }}
                </button>

                <!-- Profile Picture -->
                <img class="h-8 w-8 rounded-full object-cover cursor-pointer"
                  src="{{ Auth::user()->profile_photo ? asset('storage/profile_photos/' . Auth::user()->profile_photo) : asset('profile_photos/default-profile-picture.png') }}"
                  alt="dummy.png" />

                <!-- Dropdown Menu -->
                <div x-show="profileOpen" @click.away="profileOpen = false"
                  class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                  <a href="{{ route('profile.show_profile') }}"
                    class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 rounded-lg items-center justify-center">Account</a>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                      class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 rounded-lg">Logout</button>
                  </form>
                </div>
              </div>
            @else
              <a href="{{ route('view_login') }}"
                class="px-3 py-2 text-sm font-medium text-indigo-100 transition-all duration-200 hover:bg-white hover:bg-opacity-10 rounded-md">
                Sign In
              </a>
            @endauth
          </div>
        </nav>
      </div>

      <!-- Mobile menu button -->
      <div class="absolute right-0 flex-shrink-0 lg:hidden z-50 mt-1.5">
        <button type="button" @click="isOpen = !isOpen"
          class="relative inline-flex items-center justify-center rounded-md bg-transparent p-2 text-indigo-200 hover:bg-white hover:bg-opacity-10 hover:text-slate-900 focus:outline-none hover:ring-2 hover:ring-slate-800">
          <span class="sr-only">Open main menu</span>

          <!-- Hamburger icon when menu is closed -->
          <svg :class="{ 'block': !isOpen, 'hidden': isOpen }" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>

          <!-- X icon when menu is open -->
          <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile menu, shown when isOpen is true -->
    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
      x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-95" class="lg:hidden">
      <div class="fixed inset-0 z-20 bg-black bg-opacity-25" aria-hidden="true"></div>

      <div class="absolute inset-x-0 top-0 z-20 mx-auto w-full max-w-2xl origin-top transform transition ease-linear">
        <div class="divide-y divide-gray-200 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
          <div class="pb-2 pt-3">
            <div class="flex items-center justify-between px-4">
              <div>
                <h2 class="text-lg font-medium text-gray-900">Menu</h2>
              </div>
              <div>
                <button type="button" @click="isOpen = !isOpen"
                  class="relative inline-flex items-center justify-center rounded-md bg-transparent p-2 text-indigo-400 hover:bg-indigo-200 hover:bg-opacity-10 focus:outline-none">
                  <span class="sr-only">Close menu</span>
                </button>
              </div>
            </div>
          </div>
          <nav class="flex flex-col space-y-1 py-2">
            <a href="{{ route('map') }}" @click="activeItem = 'map'; isOpen = false"
              :class="{ 'text-indigo-600': activeItem === 'map', 'text-slate-500': activeItem !== 'map' }"
              class="block px-4 py-2 text-sm font-medium">Map</a>
            <a href="{{ route('information') }}" @click="activeItem = 'information'; isOpen = false"
              :class="{ 'text-indigo-600': activeItem === 'information', 'text-slate-500': activeItem !== 'information' }"
              class="block px-4 py-2 text-sm font-medium">Information</a>
            <a href="{{ route('news.index') }}" @click="activeItem = 'news'; isOpen = false"
              :class="{ 'text-indigo-600': activeItem === 'news', 'text-slate-500': activeItem !== 'news' }"
              class="block px-4 py-2 text-sm font-medium">News</a>
            <a href="{{ route('tips') }}" @click="activeItem = 'tips'; isOpen = false"
              :class="{ 'text-indigo-600': activeItem === 'tips', 'text-slate-500': activeItem !== 'tips' }"
              class="block px-4 py-2 text-sm font-medium">Tips</a>
            <a href="{{ route('about') }}" @click="activeItem = 'about'; isOpen = false"
              :class="{ 'text-indigo-600': activeItem === 'about', 'text-slate-500': activeItem !== 'about' }"
              class="block px-4 py-2 text-sm font-medium">About</a>
            <a href="{{ route('support') }}" @click="activeItem = 'support'; isOpen = false"
              :class="{ 'text-indigo-600': activeItem === 'support', 'text-slate-500': activeItem !== 'support' }"
              class="block px-4 py-2 text-sm font-medium">Support</a>

            <!-- Add auth section in mobile menu -->
            <div class="border-t border-gray-200 mt-2 pt-2">
              @auth
                <div class="px-4 py-2">
                  <p class="text-sm font-medium text-gray-600">Signed in as:</p>
                  <p class="text-sm font-medium text-gray-900">{{ Auth::user()->username }}</p>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="block">
                  @csrf
                  <button type="submit"
                    class="w-full text-left px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50">
                    Sign Out
                  </button>
                </form>
              @else
                <a href="{{ route('view_login') }}"
                  class="block px-4 py-2 text-sm font-medium text-indigo-600 hover:bg-indigo-50">
                  Sign In
                </a>
              @endauth
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
