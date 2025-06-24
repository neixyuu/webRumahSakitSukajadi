@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Detail Pengaduan</h6>
                    </div>
                </div>
                <div class="card-body px-4 pb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Nama:</strong>
                                <p>{{ $pengaduan->nama }}</p>
                            </div>
                            <div class="mb-3">
                                <strong>Email:</strong>
                                <p>{{ $pengaduan->email }}</p>
                            </div>
                            <div class="mb-3">
                                <strong>No. Telepon:</strong>
                                <p>{{ $pengaduan->no_telp }}</p>
                            </div>
                            <div class="mb-3">
                                <strong>No. Rekam Medis:</strong>
                                <p>{{ $pengaduan->no_rm ?: '-' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong>Kategori:</strong>
                                <p>{{ $pengaduan->kategori }}</p>
                            </div>
                            <div class="mb-3">
                                <strong>Lokasi:</strong>
                                <p>{{ $pengaduan->lokasi }}</p>
                            </div>
                            <div class="mb-3">
                                <strong>Tanggal Kejadian:</strong>
                                <p>{{ $pengaduan->tanggal_kejadian }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="mb-3">
                                <strong>Pesan Pengaduan:</strong>
                                <p class="mt-2">{{ $pengaduan->message }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <a href="{{ route('admin.dashboardpengaduan') }}" class="btn btn-secondary btn-sm ms-2">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection