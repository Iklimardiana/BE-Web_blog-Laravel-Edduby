{{-- @extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Edit Post</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input id="title" name="title" type="text" class="form-control"
                                value="{{ old('title', $post->title) }}" placeholder="Masukkan judul">
                        </div>

                        <div class="mb-3">
                            <label for="body" class="form-label">Isi</label>
                            <textarea id="body" name="body" rows="6" class="form-control" placeholder="Tulis isi post...">{{ old('body', $post->body) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select id="category" name="category" class="form-select" onchange="toggleNewCategory(this)">
                                <option value="">-- Pilih kategori --</option>
                                <option value="tech" {{ $post->category == 'tech' ? 'selected' : '' }}>Tech</option>
                                <option value="life" {{ $post->category == 'life' ? 'selected' : '' }}>Life</option>
                                <option value="news" {{ $post->category == 'news' ? 'selected' : '' }}>News</option>
                                <option value="new">+ Tambah kategori baru</option>
                            </select>
                        </div>

                        <div class="mb-3 d-none" id="newCategoryWrapper">
                            <label for="newCategory" class="form-label">Kategori Baru</label>
                            <input id="newCategory" type="text" class="form-control"
                                placeholder="Masukkan kategori baru">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar (opsional)</label>
                            <input id="image" name="image" type="file" class="form-control">
                            @if ($post->image)
                                <small class="text-muted">Gambar sekarang: {{ $post->image }}</small>
                            @endif
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function toggleNewCategory(select) {
            const newCategoryWrapper = document.getElementById('newCategoryWrapper');
            if (select.value === 'new') {
                newCategoryWrapper.classList.remove('d-none');
            } else {
                newCategoryWrapper.classList.add('d-none');
            }
        }
    </script>
@endpush --}}
