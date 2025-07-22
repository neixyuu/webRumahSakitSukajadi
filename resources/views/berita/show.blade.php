<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>{{ $berita->judul }} - RSUD Sukajadi</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style_welcome.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
    <!-- Custom CSS untuk styling detail berita -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .article-container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .article-card {
            border-radius: 20px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden;
            background: white;
        }

        .article-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .article-content {
            padding: 2.5rem;
        }

        .article-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #1a6692;
            line-height: 1.3;
        }

        .article-meta {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 2rem;
            color: #666;
            font-size: 14px;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .meta-item i {
            color: #f33f3f;
        }

        .category-badge {
            background: #f33f3f;
            color: white;
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .article-text {
            line-height: 1.8;
            color: #444;
            font-size: 16px;
            text-align: justify;
        }

        .back-button {
            position: fixed;
            top: 30px;
            left: 30px;
            background: #f33f3f;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            box-shadow: 0 5px 15px rgba(243, 63, 63, 0.3);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            transition: all 0.3s ease;
            font-size: 20px;
        }

        .back-button:hover {
            background: #d32f2f;
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(243, 63, 63, 0.4);
        }

        @media (max-width: 768px) {
            .article-container {
                margin-top: 30px;
                padding: 0 15px;
            }
            
            .article-content {
                padding: 1.5rem;
            }
            
            .article-title {
                font-size: 1.5rem;
            }
            
            .article-image {
                height: 250px;
            }
            
            .back-button {
                top: 20px;
                left: 20px;
                width: 50px;
                height: 50px;
                font-size: 18px;
            }
            
            .article-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Back Button -->
    <button onclick="window.history.back()" class="back-button" title="Kembali">
        <i class="fas fa-arrow-left"></i>
    </button>

    <!-- Article Content -->
    <div class="article-container">
        <div class="container">
            <div class="article-card">
                @if($berita->gambar)
                    <img src="{{ Storage::url($berita->gambar) }}" class="article-image" alt="{{ $berita->judul }}">
                @endif
                
                <div class="article-content">
                    <h1 class="article-title">{{ $berita->judul }}</h1>
                    
                    <div class="article-meta">
                        <span class="category-badge">{{ $berita->kategori ?? 'News' }}</span>
                        <div class="meta-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>{{ \Carbon\Carbon::parse($berita->created_at)->format('d F, Y') }}</span>
                        </div>
                    </div>
                    
                    <div class="article-text">
                        {!! nl2br(e($berita->isi)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

    <!-- Custom JavaScript untuk halaman detail berita -->
    <script>
        // Fallback untuk preloader jika custom.js tidak load
        setTimeout(function() {
            $('#preloader').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 3000);

        // Enhanced back button functionality
        $('.back-button').click(function() {
            if (document.referrer && document.referrer.includes(window.location.hostname)) {
                window.history.back();
            } else {
                window.location.href = '/berita';
            }
        });
    </script>
</body>

</html>