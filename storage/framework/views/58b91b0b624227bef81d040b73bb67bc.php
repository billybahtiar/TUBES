<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0"><?php echo e(__('Tambah Program Study')); ?></h1>
                    <a href="<?php echo e(route('admin.program_study.index')); ?>" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                        <form method="post" action="<?php echo e(route('admin.program_study.store')); ?>">
                            <?php echo csrf_field(); ?> 
                            <div class="form-group row border-bottom pb-4">
                                <label for="kode_prody" class="col-sm-2 col-form-label">Kode Prody</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="kode_prody" value="<?php echo e(old('kode_prody')); ?>" id="kode_prody">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="nama_prody" class="col-sm-2 col-form-label">Nama Prody</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_prody" value="<?php echo e(old('nama_prody')); ?>" id="nama_prody">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="jurusan_id" class="col-sm-2 col-form-label">Nama Jurusan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="jurusan_id" id="jurusan_id">
                                        <?php $__currentLoopData = $jurusans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e(old('jurusan_id') == $jurusan->id ? 'selected' : null); ?> value="<?php echo e($jurusan->id); ?>"><?php echo e($jurusan->nama_jurusan); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/admin/program_study/create.blade.php ENDPATH**/ ?>