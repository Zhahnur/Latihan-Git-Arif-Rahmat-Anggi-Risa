<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arif Rahmat Anggi Risa</title>
    <style>
        body {
            background-color: #222222;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .logo {
            display: block;
            margin: 0 auto;
            width: 200px;
            height: auto;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            background-color: #ff5500;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #cc4400;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Arif - Rahmat - Anggi - Risa (ARAR)</h1>
        <img class="logo" src="<?php echo e(Vite::asset('resources/images/arar-logo.png')); ?>" alt="ARAR Logo">

        <div style="text-align: center;">
            <a class="btn" href="home">Halaman Utama</a>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH /Users/zhahnur/Documents/Kelompok 2 Modul 6/resources/views/welcome.blade.php ENDPATH**/ ?>