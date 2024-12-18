@foreach ($news as $item)
    <div class="border rounded p-4 mb-4">
        <h2 class="text-xl font-bold">{{ $item->title }}</h2>
        <p>{{ $item->content }}</p>
        <div class="mt-4">
            @if (auth()->id() === $item->user_id)
                <a href="{{ route('news.edit', $item->id) }}" 
                   class="text-blue-600 hover:underline">Edit</a>
                <form action="{{ route('news.destroy', $item->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline"
                            onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            @endif
        </div>
    </div>
@endforeach