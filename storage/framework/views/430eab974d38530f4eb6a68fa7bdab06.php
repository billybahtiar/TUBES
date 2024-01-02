<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0"><?php echo e(__('Tambah Tahun Akademik')); ?></h1>
                    <a href="<?php echo e(route('admin.tahun_akademik.index')); ?>" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                        <form method="post" action="<?php echo e(route('admin.tahun_akademik.store')); ?>">
                            <?php echo csrf_field(); ?> 
                            <div class="form-group row border-bottom pb-4">
                                <label for="tahun_akademik" class="col-sm-2 col-form-label">Tahun Akademik</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="tahun_akademik" value="<?php echo e(old('tahun_akademik')); ?>" id="tahun_akademik">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="semester" class="col-sm-2 col-form-label">SEMESTER</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="semester" id="semester">
                                        <option <?php echo e(old('semester') == 'ganjil' ? 'selected' : null); ?> value="ganjil">Ganjil</option>
                                        <option <?php echo e(old('semester') == 'genap' ? 'selected' : null); ?> value="genap">Genap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status" id="status">
                                        <option <?php echo e(old('status') == 'aktif' ? 'selected' : null); ?> value="aktif">Aktif</option>
                                        <option <?php echo e(old('status') == 'tidak_aktif' ? 'selected' : null); ?> value="tidak_aktif">Tidak Aktif</option>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/admin/tahun_akademik/create.blade.php ENDPATH**/ ?>