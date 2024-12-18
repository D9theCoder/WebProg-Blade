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
    document.addEventListener('DOMContentLoaded', function() {
      // Check all messages and show/hide buttons based on content height
      document.querySelectorAll('[id^="message-"]').forEach(message => {
        const id = message.id.split('-')[1];
        const button = document.getElementById(`button-${id}`);
        if (message.scrollHeight > message.clientHeight) {
          button.classList.remove('hidden');
        }
      });
    });

    function toggleMessage(id) {
      const content = document.getElementById(`message-${id}`);
      const button = document.getElementById(`button-${id}`);
      const isExpanded = content.classList.contains('line-clamp-4');

      if (isExpanded) {
        content.classList.remove('line-clamp-4');
        button.textContent = 'Show less';
      } else {
        content.classList.add('line-clamp-4');
        button.textContent = 'Show more';
      }
    }
  </script>
</head>

<body class="h-full" style="background-color: #eae8e0">
  <x-header />
  <nav class="bg-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <x-admin-sub-navbar />
    </div>
  </nav>
  <main class="pb-8 max-lg:pt-4">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-6">
      <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b-2 border-gray-300 pb-2">User Feedback</h2>

        @if ($feedback->isEmpty())
          <div class="text-center py-12">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-4l-4 4z" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">No feedback yet</h3>
            <p class="mt-1 text-sm text-gray-500">Waiting for users to submit their feedback.</p>
          </div>
        @else
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($feedback as $fb)
              <div
                class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                <div class="p-5">
                  <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                      <span class="text-blue-600 font-semibold text-lg">{{ strtoupper(substr($fb->username, 0, 1)) }}</span>
                    </div>
                    <div class="ml-3 flex-1">
                      <h3 class="text-lg font-semibold text-gray-800">{{ $fb->username }}</h3>
                      <div class="flex justify-between items-center">
                        <p class="text-sm text-gray-600">{{ $fb->full_name }}</p>
                        <span class="text-xs text-gray-500">
                          @if($fb->created_at instanceof \Carbon\Carbon)
                            {{ $fb->created_at->diffForHumans() }}
                          @else
                            {{ date('M d, Y', strtotime($fb->created_at)) }}
                          @endif
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="border-t pt-4">
                    <p id="message-{{ $fb->id }}" class="text-gray-700 text-sm leading-relaxed line-clamp-4">{{ $fb->message }}</p>
                    <button 
                      id="button-{{ $fb->id }}"
                      onclick="toggleMessage('{{ $fb->id }}')"
                      class="text-blue-600 hover:text-blue-800 text-sm mt-2 focus:outline-none hidden"
                    >
                      Show more
                    </button>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <div class="mt-6">
            {{ $feedback->links() }}
          </div>
        @endif
      </div>
    </div>
  </main>
</body>

</html>
