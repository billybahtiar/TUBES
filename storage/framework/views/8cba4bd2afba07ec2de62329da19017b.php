<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0"><?php echo e(__('Tambah Jurusan')); ?></h1>
                    <a href="<?php echo e(route('admin.jurusan.index')); ?>" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                    <div class="card p-3">
                        <form method="post" action="<?php echo e(route('admin.jurusan.store')); ?>">
                            <?php echo csrf_field(); ?> 
                            <div class="form-group row border-bottom pb-4">
                                <label for="nama_jurusan" class="col-sm-2 col-form-label">Nama Jurusan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_jurusan" value="<?php echo e(old('nama_jurusan')); ?>" id="nama_jurusan">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="kode_jurusan" class="col-sm-2 col-form-label">Kode Jurusan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="kode_jurusan" value="<?php echo e(old('kode_jurusan')); ?>" id="kode_jurusan">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/admin/jurusan/create.blade.php ENDPATH**/ ?>