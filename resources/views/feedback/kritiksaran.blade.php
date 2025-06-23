<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik dan Saran - RSUD Sukajadi</title>
    <!-- Additional CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #111;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .contact-us {
            width: 100%;
            padding: 20px;
        }
        .form-container {
            background: rgba(30, 30, 30, 0.9);
            padding: 40px 40px 40px 15px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            margin: 0 auto;
        }
        input, textarea {
            background: rgba(40, 40, 40, 0.9) !important;
            border: none !important;
            color: #fff !important;
            padding: 15px !important;
            margin-bottom: 20px !important;
            border-radius: 8px !important;
            width: 100%;
        }
        .main-button {
            background: #0066ff;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            width: auto;
        }
        .main-button:hover {
            background: #0052cc;
            transform: translateY(-2px);
        }
        .heading-text {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .sub-text {
            color: #888;
            margin-bottom: 30px;
        }
        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            background: rgba(40, 40, 40, 0.9);
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .back-button:hover {
            background: rgba(60, 60, 60, 0.9);
            color: #fff;
            transform: translateX(-5px);
        }
    </style>
    <!-- Add SweetAlert2 CSS in head section -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <a href="{{ url('/') }}" class="back-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        Back
    </a>

    <div class="contact-us">
        <div class="container">
            <div class="form-container">
                <div class="text-center">
                    <!-- <img src="{{ asset('assets/images/logo.png') }}" alt="Profile" class="profile-image"> -->
                    <h2 class="heading-text">Kritik dan Saran</h2>
                    <p class="sub-text">Sampaikan masukan Anda untuk peningkatan layanan kami</p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('feedback.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input type="text" name="nama" id="nama" placeholder="Nama" required>
                        </div>
                        <div class="col-12 mb-3">
                            <input type="tel" name="no_telp" id="no_telp" pattern="[0-9]*" minlength="10" maxlength="13" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="message" id="message" rows="5" placeholder="Pesan" required></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="main-button">Send a message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update scripts section at the bottom -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Terima Kasih!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#0066ff',
            timer: 3000,
            timerProgressBar: true
        }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
                window.location.href = '{{ url('/') }}';
            }
        });
    </script>
    @endif
</body>
</html>