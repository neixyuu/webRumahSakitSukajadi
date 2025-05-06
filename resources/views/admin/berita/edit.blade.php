@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit Article</h6>
                    </div>
                </div>
                <div class="card-body px-4 pb-2">
                    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $berita->kategori }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="isi" class="form-label">Konten</label>
                            <textarea class="form-control" id="isi" name="isi" rows="5" required>{{ $berita->isi }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Article</button>
                        <a href="{{ route('admin.dashboardberita') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection