@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Feedback</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Feedback</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-comments me-1"></i>
            Daftar Feedback
        </div>
        <div class="card-body">
            @if(count($feedbacks) > 0)
                <table id="datatablesSimple" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No. Telepon</th>
                            <th>Message</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feedbacks as $index => $feedback)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $feedback->nama }}</td>
                            <td>{{ $feedback->no_telp }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#feedbackModal{{ $feedback->id }}">
                                    <i class="fas fa-eye"></i> Lihat
                                </button>
                            </td>
                            <td>{{ $feedback->created_at->format('d M Y, H:i') }}</td>
                            <td>
                                <span class="badge {{ $feedback->status == 'Dibaca' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $feedback->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    @if($feedback->status != 'Dibaca')
                                    <form action="{{ route('admin.feedback.markAsRead', $feedback->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                    @endif
                                    <form action="{{ route('admin.feedback.destroy', $feedback->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus feedback ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal Detail Feedback -->
                        <div class="modal fade" id="feedbackModal{{ $feedback->id }}" tabindex="-1" aria-labelledby="feedbackModalLabel{{ $feedback->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="feedbackModalLabel{{ $feedback->id }}">Detail Feedback</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="fw-bold">Nama:</label>
                                            <p>{{ $feedback->nama }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="fw-bold">No. Telepon:</label>
                                            <p>{{ $feedback->no_telp }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="fw-bold">Tanggal:</label>
                                            <p>{{ $feedback->created_at->format('d M Y, H:i') }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="fw-bold">Message:</label>
                                            <div class="p-3 bg-light rounded">
                                                {{ $feedback->message }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        @if($feedback->status != 'Dibaca')
                                        <form action="{{ route('admin.feedback.markAsRead', $feedback->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success">
                                                <i class="fas fa-check"></i> Tandai Dibaca
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-center py-4">
                    <h5>Belum ada feedback yang diterima</h5>
                    <p class="text-muted">Feedback dari pengguna akan muncul di sini</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('datatablesSimple');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    });
</script>
@endsection