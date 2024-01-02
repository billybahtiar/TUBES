<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0"><?php echo e(__('Edit KRS')); ?></h1>
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
                        <form method="post" action="<?php echo e(route('admin.krs.update', [$krs])); ?>">
                            <?php echo csrf_field(); ?> 
                            <?php echo method_field('put'); ?>
                            <div class="form-group row border-bottom pb-4">
                                <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                                <div class="col-sm-10">
                                    <input readonly type="text" class="form-control" name="nim" value="<?php echo e($krs->nim); ?>" id="nim">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="tahun_akademik_id" class="col-sm-2 col-form-label">Tahun Akademik</label>
                                <div class="col-sm-10">
                                    <select readonly class="form-control" name="tahun_akademik_id" id="tahun_akademik_id">
                                        <option readonly value="<?php echo e($krs->tahun_akademik->id); ?>"> <?php echo e($krs->tahun_akademik->tahun_akademik . $krs->tahun_akademik->semester); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="mata_kuliah_id" class="col-sm-2 col-form-label">Mata Kuliah</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="mata_kuliah_id" id="mata_kuliah_id">
                                        <?php $__currentLoopData = $data_mata_kuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mata_kuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e($krs->mata_kuliah->id == $mata_kuliah->id ? 'selected' : null); ?> value="<?php echo e($mata_kuliah->id); ?>"><?php echo e($mata_kuliah->nama_mata_kuliah); ?></option>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/admin/krs/edit.blade.php ENDPATH**/ ?>