@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Article Details</h6>
                    </div>
                </div>
                <div class="card-body px-4 pb-2">
                    <div class="mb-3">
                        <h5>{{ $berita->judul }}</h5>
                    </div>
                    <div class="mb-3">
                        <strong>Category:</strong> {{ $berita->kategori }}
                    </div>
                    @if($berita->gambar)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Article Image" class="img-fluid" style="max-width: 500px;">
                    </div>
                    @endif
                    <div class="mb-3">
                        <strong>Content:</strong>
                        <p>{!! nl2br(e($berita->isi)) !!}</p>
                    </div>
                    <div class="mb-3">
                        <strong>Created at:</strong> {{ $berita->created_at->format('d M Y H:i') }}
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('admin.dashboardberita') }}" class="btn btn-secondary">Back to List</a>
                        <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn btn-warning">Edit Article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection