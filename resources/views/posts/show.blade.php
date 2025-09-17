@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm">
                <div class="card-header">
                    {{-- <h5 class="mb-0">{{ $post->title }}</h5> --}}
                    <h5 class="mb-0">Title</h5>
                </div>

                <div class="card-body">
                    {{-- Gambar --}}
                    @if ($post->image)
                        {{-- <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar post" class="img-fluid mb-3 rounded"> --}}
                        <img src="" alt="Gambar post" class="img-fluid mb-3 rounded">
                    @endif

                    {{-- Kategori --}}
                    <p class="text-muted mb-2">
                        {{-- Kategori: <strong>{{ $post->category->name ?? '-' }}</strong> --}}
                        Kategori: <strong>Kategori</strong>
                    </p>

                    {{-- Isi post --}}
                    <p class="mb-4">
                        {{-- {{ $post->body }} --}}
                        Body
                    </p>

                    {{-- Info tambahan --}}
                    <small class="text-muted">
                        {{-- Dibuat pada: {{ $post->created_at->format('d M Y H:i') }} --}}
                        Dibuat pada: Tanggal
                        @if ($post->updated_at != $post->created_at)
                            {{-- | Diperbarui: {{ $post->updated_at->format('d M Y H:i') }} --}}
                            | Diperbarui: Tanggal
                        @endif
                    </small>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">← Kembali</a>
                    <div>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>

                        {{-- <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline" --}}
                        <form action="" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin mau hapus post ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
