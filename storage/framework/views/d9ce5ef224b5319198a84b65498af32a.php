<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Kelompok</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>

    <style>
        .container {
          width: 800px;
          margin: 2px;
        }
        .profile {
          display: flex;
          align-items: center;
          margin-bottom: 20px;
        }
        .profile img {
          width: 100px;
          height: 100px;
          border-radius: 50%;
          margin-right: 20px;
        }
        .profile h3 {
          margin: 0;
        }
      </style>
</head>



<?php $__env->startSection('content'); ?>
<?php echo $__env->make('default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <div class="container">
        <div class="profile">
          <img src="<?php echo e(Vite::asset('resources/images/profil1.jpeg')); ?>" alt="Foto Profil">
          <div>
            <b><p>Anggi Aulia Putri</p></b>
          </div>
        </div>

        <div class="profile">
          <img src="<?php echo e(Vite::asset('resources/images/profil2.jpeg')); ?>" alt="Foto Profil">
          <div>
            <b><p>Dewi Nahrisa Amelia</p></b>
          </div>
        </div>

        <div class="profile">
          <img src="<?php echo e(Vite::asset('resources/images/profil3.jpeg')); ?>" alt="Foto Profil">
          <div>
            <b><p>M. Zhahnur Arif</p></b>
          </div>
        </div>

        <div class="profile">
            <img src="<?php echo e(Vite::asset('resources/images/profil4.jpeg')); ?>" alt="Foto Profil">
            <div>
                <b><p>Ridho Rahmatulloh</p></b>
            </div>
          </div>
      </div>
</body>
<?php $__env->stopSection(); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Latihan-Git-Arif-Rahmat-Anggi-Risa\resources\views/profile.blade.php ENDPATH**/ ?>