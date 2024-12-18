<div class="container mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Edit News</h1>

  <form action="{{ route('news.update', $news->id) }}" method="POST" class="space-y-4">
      @csrf
      @method('PUT')

      <!-- Title -->
      <div>
          <label for="title" class="block text-sm font-medium">Title</label>
          <input type="text" id="title" name="title" value="{{ old('title', $news->title) }}" 
                 class="w-full mt-1 border rounded p-2" required>
          @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
      </div>

      <!-- Content -->
      <div>
          <label for="content" class="block text-sm font-medium">Content</label>
          <textarea id="content" name="content" rows="5" 
                    class="w-full mt-1 border rounded p-2" required>{{ old('content', $news->content) }}</textarea>
          @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
      </div>

      <!-- Submit -->
      <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update News</button>
  </form>
</div>