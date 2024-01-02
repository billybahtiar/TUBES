<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 justify-content-between d-flex">
                    <h1 class="m-0"><?php echo e(__('Mata Kuliah')); ?></h1>
                    <a href="<?php echo e(route('admin.mata_kuliah.create')); ?>" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> </a>
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

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Mata Kuliah</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>SEMESTER</th>
                                        <th>Program Study</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data_mata_kuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mata_kuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($mata_kuliah->kode_mata_kuliah); ?></td>
                                        <td><?php echo e($mata_kuliah->nama_mata_kuliah); ?></td>
                                        <td><?php echo e($mata_kuliah->sks); ?></td>
                                        <td><?php echo e($mata_kuliah->semester); ?></td>
                                        <td><?php echo e($mata_kuliah->program_study->nama_prody); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.mata_kuliah.edit', [$mata_kuliah])); ?>" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>              
                                            <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="<?php echo e(route('admin.mata_kuliah.destroy', [$mata_kuliah])); ?>" method="post">
                                                <?php echo csrf_field(); ?> 
                                                <?php echo method_field('delete'); ?>
                                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                            </form>                              
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/admin/mata_kuliah/index.blade.php ENDPATH**/ ?>