<!-- aboutus-page.blade.php -->
@props(['team' => []])
<section id="about" aria-labelledby="about-title" class="-mt-4">
  <h2 class="sr-only" id="about-title">About</h2>
  <div class="overflow-hidden rounded-lg bg-white shadow mb-8">
    <div class="p-6">

      <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">Meet Our Team</h2>
      <div class="flex justify-center items-center space-x-4">
        @foreach ($team as $member)
          <div
            class="relative w-44 h-44 bg-white p-4 rounded-full shadow-md transition-all duration-400 hover:rounded-lg hover:h-[220px] group">
            <div class="relative w-full h-full">
              <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}"
                class="w-full h-90% object-cover rounded-full transition-all duration-400 group-hover:rounded-lg group-hover:-translate-y-10">
            </div>
            <div
              class="text-center -translate-y-16 opacity-0 pointer-events-none transition-all duration-500 group-hover:opacity-100 group-hover:pointer-events-auto">
              <h3 class="text-lg text-[#0c52a1] font-semibold">{{ $member['name'] }}</h3>
              <p class="text-xs font-medium my-1">{{ $member['role'] }}</p>
              <div class="mt-2">
                <a href="{{ $member['facebook'] }}"
                  class="text-lg text-gray-700 hover:text-[#0c52a1] transition-colors mx-1">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="{{ $member['twitter'] }}"
                  class="text-lg text-gray-700 hover:text-[#0c52a1] transition-colors mx-1">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="{{ $member['instagram'] }}"
                  class="text-lg text-gray-700 hover:text-[#0c52a1] transition-colors mx-1">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <!-- Contact Form Section -->
      <h2 class="text-2xl font-bold mb-6 mt-12 justify-center text-center">Contact Us</h2>
      <form action="{{ route('submit_feedback') }}" method="POST">
        @csrf
        <div class="mb-4">
          <label for="full_name" class="block text-gray-700 text-sm font-bold mb-2">Your Name</label>
          <input type="text" name="full_name" id="full_name"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          @error('full_name')
            <span class="text-red-500">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-4">
          <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
          <textarea name="message" id="message" rows="4"
            class="shadow appearance-none border-1 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
          @error('message')
            <span class="text-red-500">{{ $message }}</span>
          @enderror
        </div>

        <div class="flex items-center justify-between">
          <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
