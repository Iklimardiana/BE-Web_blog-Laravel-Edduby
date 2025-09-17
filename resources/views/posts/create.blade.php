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
                    <form>
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input id="title" type="text" class="form-control" placeholder="Masukkan judul">
                        </div>

                        <div class="mb-3">
                            <label for="body" class="form-label">Isi</label>
                            <textarea id="body" rows="6" class="form-control" placeholder="Tulis isi post..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select id="category" class="form-select" onchange="toggleNewCategory(this)">
                                <option value="">-- Pilih kategori --</option>
                                <option value="tech">Tech</option>
                                <option value="life">Life</option>
                                <option value="news">News</option>
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
                            <input id="image" type="file" class="form-control">
                        </div>

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
        function toggleNewCategory(select) {
            const newCategoryWrapper = document.getElementById('newCategoryWrapper');
            if (select.value === 'new') {
                newCategoryWrapper.classList.remove('d-none');
            } else {
                newCategoryWrapper.classList.add('d-none');
            }
        }
    </script>
