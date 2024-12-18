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
  <nav class="bg-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <x-admin-sub-navbar />
    </div>
  </nav>
  <main class="pb-8 max-lg:pt-4">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-6">
      <div class="bg-white p-6 rounded-lg shadow">
        @if (session('success'))
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
            role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
          </div>
        @endif
        @if (session('error'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
          </div>
        @endif
        @if ($users->count() > 0)
          <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b-2 border-gray-300 pb-2">User List</h2>
          <div class="overflow-x-auto mt-6 w-full">
            <form method="GET" action="{{ route('profile.admin.index') }}"
              class="mb-4 flex justify-between items-center">
              <div>
                <label for="perPage" class="mr-2">Records per page:</label>
                <select name="perPage" id="perPage" onchange="this.form.submit()">
                  <option value="10" {{ request('perPage') == 10 ? 'selected' : '' }}>10</option>
                  <option value="20" {{ request('perPage') == 20 ? 'selected' : '' }}>20</option>
                  <option value="30" {{ request('perPage') == 30 ? 'selected' : '' }}>30</option>
                  <option value="all" {{ request('perPage') == 'all' ? 'selected' : '' }}>All</option>
                </select>
              </div>
              <div>
                <label for="sortBy" class="mr-2">Sort by:</label>
                <select name="sortBy" id="sortBy" onchange="this.form.submit()">
                  <option value="id" {{ request('sortBy') == 'id' ? 'selected' : '' }}>ID</option>
                  <option value="username" {{ request('sortBy') == 'username' ? 'selected' : '' }}>Name</option>
                  <option value="email" {{ request('sortBy') == 'email' ? 'selected' : '' }}>Email</option>
                  <option value="role" {{ request('sortBy') == 'role' ? 'selected' : '' }}>Role</option>
                </select>
                <select name="sortOrder" id="sortOrder" onchange="this.form.submit()">
                  <option value="asc" {{ request('sortOrder') == 'asc' ? 'selected' : '' }}>Ascending</option>
                  <option value="desc" {{ request('sortOrder') == 'desc' ? 'selected' : '' }}>Descending</option>
                </select>
              </div>
            </form>
            <table class="w-full border-collapse">
              <thead>
                <tr>
                  <th class="text-left text-neutral-900 px-3 py-3 bg-neutral-100 rounded-l-lg border border-gray-300">ID
                  </th>
                  <th class="text-left text-neutral-900 px-3 py-3 bg-neutral-100 border border-gray-300">Name</th>
                  <th class="text-left text-neutral-900 px-3 py-3 bg-neutral-100 border border-gray-300">Email</th>
                  <th class="text-left text-neutral-900 px-3 py-3 bg-neutral-100 border border-gray-300">Role</th>
                  <th class="text-left text-neutral-900 px-3 py-3 bg-neutral-100 rounded-r-lg border border-gray-300">
                    Actions</th>
                </tr>
              </thead>
              <tbody class="text-neutral-900">
                @foreach ($users as $user)
                  <tr class="border-b border-gray-200">
                    <td class="px-3 py-3 border border-gray-200">{{ $user->id }}</td>
                    <td class="px-3 py-3 border border-gray-200">{{ $user->username }}</td>
                    <td class="px-3 py-3 border border-gray-200">{{ $user->email }}</td>
                    <td class="px-3 py-3 capitalize border border-gray-200">{{ $user->role }}</td>
                    @if ($user->role !== 'superadmin')
                      <td class="px-3 py-3 border border-gray-200 flex space-x-2">
                        <form action="{{ route('profile.admin.delete_user', $user->id) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this user?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit"
                            class="bg-red-600 text-white px-2 py-1 rounded-md hover:bg-red-700">Delete</button>
                        </form>
                        <a href="{{ route('profile.admin.view_update', $user->id) }}"
                          class="bg-blue-600 text-white px-2 py-1 rounded-md hover:bg-blue-700">Update</a>
                      </td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="mt-4 flex justify-between items-center">
              @if ($users instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div>
                  Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} results
                </div>
                <div>
                  {{ $users->appends(['perPage' => request('perPage'), 'sortBy' => request('sortBy'), 'sortOrder' => request('sortOrder')])->links() }}
                </div>
                <div>
                  <form method="GET" action="{{ route('profile.admin.index') }}">
                    <label for="page" class="mr-2">Go to page:</label>
                    <input type="number" name="page" id="page" min="1" max="{{ $users->lastPage() }}"
                      value="{{ $users->currentPage() }}" class="border rounded px-2 py-1">
                    <input type="hidden" name="perPage" value="{{ request('perPage') }}">
                    <input type="hidden" name="sortBy" value="{{ request('sortBy') }}">
                    <input type="hidden" name="sortOrder" value="{{ request('sortOrder') }}">
                    <button type="submit"
                      class="ml-2 bg-blue-600 text-white px-2 py-1 rounded-md hover:bg-blue-700">Go</button>
                  </form>
                </div>
              @endif
            </div>
          </div>
        @else
          <div class="text-center py-12">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">No users found</h3>
            <p class="mt-1 text-sm text-gray-500">Get started by creating a new user account.</p>
          </div>
        @endif
      </div>
    </div>
  </main>
</body>

</html>
