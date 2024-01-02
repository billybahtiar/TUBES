<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?php echo e(__('Dashboard')); ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo e(__('Halo, Selamat Datang!')); ?></h5>
                            <p class="card-text">
                                Selamat datang di halaman dashboard. Ini adalah tempat untuk mengelola semua informasi Anda.
                            </p>
                            <img src="<?php echo e(asset('images/Foto.jpeg')); ?>" alt="Image" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/home.blade.php ENDPATH**/ ?>