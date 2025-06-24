<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 20px;
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 20px auto;
            overflow: hidden;
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
        }
        .card-body {
            padding: 1.5rem;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .meta-info {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1rem;
            color: #6c757d;
        }
        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            background: white;
            border: circle;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }
        .back-button:hover {
            background:rgb(255, 255, 255);
            
        }
        .card-text {
            line-height: 1.6;
            color: #343a40;
        }
    </style>
</head>
<body>
    <button onclick="window.history.back()" class="back-button">
        ←
    </button>
    
    <div class="container mt-5">
        <div class="card">
            @if($berita->gambar)
                <!-- Add this line to debug the URL -->
                <div style="display: none">Debug URL: {{ Storage::url($berita->gambar) }}</div>
                <img src="{{ Storage::url($berita->gambar) }}" class="card-img-top" alt="{{ $berita->judul }}">
            @endif
            <div class="card-body">
                <h1 class="card-title">{{ $berita->judul }}</h1>
                <div class="meta-info">
                    <span class="category">{{ $berita->kategori }}</span>
                    <span class="date">{{ \Carbon\Carbon::parse($berita->created_at)->format('d F, Y') }}</span>
                </div>
                <div class="card-text">
                    {!! nl2br(e($berita->isi)) !!}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>