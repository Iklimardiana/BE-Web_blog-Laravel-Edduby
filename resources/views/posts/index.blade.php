@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Daftar Post</h4>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Buat Post Baru</a>
            </div>

            {{-- @if ($posts->count()) --}}
            <div class="list-group shadow-sm">
                {{-- @foreach ($posts as $post) --}}
                {{-- <a href="{{ route('posts.show', $post->id) }}" --}}
                <a href=""
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div>
                        {{-- <h5 class="mb-1">{{ $post->title }}</h5> --}}
                        <h5 class="mb-1">title</h5>
                        <small class="text-muted">
                            {{-- Kategori: {{ $post->category->name ?? '-' }} |
                                    {{ $post->created_at->format('d M Y') }} --}}
                            Kategori: nama kategori | tanggal dibuat
                        </small>
                    </div>
                    {{-- <span class="badge bg-secondary rounded-pill">{{ Str::limit($post->body, 30) }}</span> --}}
                    <span class="badge bg-secondary rounded-pill">isi post</span>
                </a>
                {{-- @endforeach --}}
            </div>

            {{-- Pagination --}}
            <div class="mt-3">
                {{-- {{ $posts->links() }} --}}
                pagination
            </div>
            {{-- @else --}}
            <div class="alert alert-info">
                Belum ada post tersedia.
            </div>
            {{-- @endif --}}

        </div>
    </div>
@endsection
