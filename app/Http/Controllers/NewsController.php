<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(3);
        return view('news', compact('news'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:10'
        ]);

        News::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('news.index')->with('success', 'News posted successfully!');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);

        // Hanya pemilik berita yang dapat mengedit
        if (auth()->id() !== $news->user_id) {
            abort(403, 'Unauthorized action.');
        }

        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        // Hanya pemilik berita yang dapat memperbarui
        if (auth()->id() !== $news->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:10',
        ]);

        $news->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if (Auth::id() !== $news->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
