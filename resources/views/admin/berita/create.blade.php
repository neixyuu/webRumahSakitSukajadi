@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Create New Article</h6>
                    </div>
                </div>
                <div class="card-body px-4 pb-2">
                    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control border border-2 border-secondary" id="judul" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-control border border-2 border-secondary" id="kategori" name="kategori" required>
                                <option value="News">News</option>
                                <option value="Article">Article</option>
                                <option value="Event">Event</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="isi" class="form-label">Isi</label>
                            <textarea class="form-control border border-2 border-secondary" id="isi" name="isi" rows="6" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control border border-2 border-secondary" id="gambar" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Article</button>
                        <a href="{{ route('admin.dashboardberita') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection