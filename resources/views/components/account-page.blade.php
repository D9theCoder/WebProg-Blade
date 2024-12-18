<section id="account" aria-labelledby="account-title" class="mt-8">
  <h2 class="sr-only" id="account-title">Account</h2>
  <div class="overflow-hidden rounded-lg bg-white shadow mb-8 p-6">
    <h1 class="text-3xl font-extrabold text-gray-900 text-center mb-8">Account Details</h1>
    @auth
      @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
          <strong class="font-bold">Success!</strong>
          <span class="block sm:inline">{{ session('success') }}</span>
        </div>
      @endif
      @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
          <strong class="font-bold">Error!</strong>
          <span class="block sm:inline">{{ session('error') }}</span>
        </div>
      @endif
      <div class="flex justify-center items-center space-x-4 mb-8">
        <div class="relative w-44 h-44 bg-white p-4 rounded-full shadow-md transition-all duration-400 group">
          <div class="relative w-full h-full">
            <img src="{{ Auth::user()->profile_photo ? asset('storage/profile_photos/' . Auth::user()->profile_photo) : asset('profile_photos/default-profile-picture.png') }}" 
                 alt="Profile Photo"
                 class="w-full h-90% object-cover rounded-full transition-all duration-400 group-hover:rounded-lg">
          </div>
        </div>
      </div>

      <div class="space-y-4 mb-8">
        <div class="flex flex-col">
          <p><strong>Username:</strong> {{ Auth::user()->username }}</p>
          <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        </div>
      </div>

      <div class="mb-2">
        <h4 class="text-xl font-semibold mb-4">Change Profile Photo</h4>
        <form action="{{ route('updateProfilePhoto') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
          @csrf
          <div>
            <input type="file" name="profile_photo" id="profile_photo"
              class="block w-full text-sm text-gray-500
                                      file:mr-4 file:py-2 file:px-4
                                      file:rounded-full file:border-0
                                      file:text-sm file:font-semibold
                                      file:bg-blue-50 file:text-blue-700
                                      hover:file:bg-blue-100">
            @error('profile_photo')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <div class="flex gap-2">
            <button type="submit"
              class="flex-1 py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-semibold rounded-md">
              Update Photo
            </button>
            <a href="{{ route('resetProfilePhoto') }}"
              class="flex-1 py-2 px-4 bg-gray-500 hover:bg-gray-700 text-white font-semibold rounded-md text-center">
              Reset to Default
            </a>
          </div>
        </form>
      </div>

      <div class="mb-2">
        @if (Auth::user()->role == 'admin')
          <a href="{{ route('profile.admin.view_update_self', Auth::user()->id) }}"
            class="block w-full py-2 px-4 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-md text-center transition duration-150 ease-in-out">
            Edit User Data
          </a>
        @elseif (Auth::user()->role == 'contributor')
          <a href="{{ route('profile.contributor.view_update', Auth::user()->id) }}"
            class="block w-full py-2 px-4 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-md text-center transition duration-150 ease-in-out">
            Edit User Data
          </a>
        @elseif (Auth::user()->role == 'reporter')
          <a href="{{ route('profile.reporter.view_update', Auth::user()->id) }}"
            class="block w-full py-2 px-4 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-md text-center transition duration-150 ease-in-out">
            Edit User Data
          </a>
        @endif
      </div>

      @if (Auth::user()->role == 'admin' || Auth::user()->role == 'superadmin')
        <div class="mb-2">
          <a href="{{ route('profile.admin.index') }}"
            class="block w-full py-2 px-4 bg-green-500 hover:bg-green-700 text-white font-semibold rounded-md text-center transition duration-150 ease-in-out">
            Admin Dashboard
          </a>
        </div>
      @endif

      <div class="mb-2 ">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="w-full py-2 px-4 bg-red-500 hover:bg-red-700 text-white font-semibold rounded-md">
            Logout
          </button>
        </form>
      </div>
    @else
      <div class="text-center">
        <p>You are not logged in. Please <a href="{{ route('login') }}"
            class="text-blue-500 hover:text-blue-700">login</a> or <a href="{{ route('register') }}"
            class="text-blue-500 hover:text-blue-700">register</a>.</p>
      </div>
    @endauth
  </div>
</section>
