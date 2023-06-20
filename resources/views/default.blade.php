<!DOCTYPE html>
<html>
<head>
    <title>Ini Kelompok ARAR (Anggi,Rahmat,Arif,Risa)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">
    <style>
        .custom-bg {
            background-color: #f8f9fa;
        }
        .custom-card {
            background-color: #fff;
            border-radius: 15px;
            border: 1px solid #ced4da;
            padding: 20px;
        }
        .custom-icon {
            font-size: 2rem;
            color: #6c757d;
        }
        .custom-title {
            font-size: 1.5rem;
            color: #343a40;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border custom-card">
            <div class="bi-house-fill me-3 custom-icon"></div>
            <h4 class="mb-0 custom-title">Selamat datang di Homepage {{ $pageTitle }}.</h4>
        </div>
    </div>
</body>
</html>
