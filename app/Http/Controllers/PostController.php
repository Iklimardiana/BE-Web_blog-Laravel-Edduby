<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    // tampilkan form create + kirim daftar tag
    public function create()
    {
        $tags = Tag::orderBy('name')->get();   // ambil semua tag (urut alphabet)
        return view('posts.create', compact('tags'));
    }

    // menyimpan data post
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors('You must be logged in to create a post.');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body_text' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id'
        ]);

        $validated['tags'] = $validated['tags'] ?? [];

        // upload gambar
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        // buat post
        $post = Post::create([
            'title' => $validated['title'],
            'body_text' => $validated['body_text'],
            'image' => $imagePath,
            'user_id' => Auth::id(),
        ]);

        // Cek apakah ada tag baru dari request
        if ($request->filled('new_tag')) {
            $newTag = Tag::firstOrCreate(['name' => $request->input('new_tag')]);
            $validated['tags'][] = $newTag->id;
        }

        // Sinkronisasi tags ke pivot table post_tag
        $post->tags()->sync($validated['tags']);

        return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat!');
    }
}
