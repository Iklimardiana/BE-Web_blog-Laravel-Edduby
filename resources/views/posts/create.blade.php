@extends('layouts.app')

@section('title', 'Buat Post Baru')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Buat Post Baru</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Judul --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input id="title" type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan judul"
                                value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Isi --}}
                        <div class="mb-3">
                            <label for="body" class="form-label">Isi</label>
                            <textarea id="body" name="body_text" rows="6" class="form-control @error('body_text') is-invalid @enderror"
                                placeholder="Tulis isi post...">{{ old('body_text') }}</textarea>
                            @error('body_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- existing tags (multiple select) --}}
                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags</label>
                            <select id="tags" name="tags[]" class="form-select" multiple>
                                @if (isset($tags) && $tags->count())
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                            {{ in_array($tag->id, old('tags', [])) ? 'selected' : '' }}>
                                            {{ $tag->name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            <div class="form-text">Hold Ctrl (Windows) / Cmd (Mac) to select multiple.</div>
                        </div>

                        {{-- input untuk tag baru (boleh lebih dari satu, pisahkan dengan koma) --}}
                        <div class="mb-3">
                            <label for="new_tag" class="form-label">Add new tags (comma separated)</label>
                            <input id="new_tag" name="new_tag" type="text" class="form-control"
                                value="{{ old('new_tag') }}" placeholder="e.g. laravel, php, web">
                            <div class="form-text">Tags entered here will be created and attached to the post.</div>
                        </div>

                        {{-- Upload gambar --}}
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar (opsional)</label>
                            <input id="image" type="file" name="image"
                                class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Tombol --}}
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-outline-secondary" type="reset">Batal</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">← Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function toggleNewTag(select) {
            const newTagWrapper = document.getElementById('newTagWrapper');
            const selectedValues = Array.from(select.options)
                .filter(option => option.selected)
                .map(option => option.value);

            if (selectedValues.includes('new')) {
                newTagWrapper.classList.remove('d-none');
            } else {
                newTagWrapper.classList.add('d-none');
            }
        }
    </script>
@endpush
