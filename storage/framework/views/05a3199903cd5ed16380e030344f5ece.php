<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 justify-content-between d-flex">
                    <h1 class="m-0"><?php echo e(__('Mahasiswa')); ?></h1>
                    <a href="<?php echo e(route('admin.mahasiswa.create')); ?>" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> </a>
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

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Nim</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Program Study</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $data_mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($mahasiswa->nama_lengkap); ?></td>
                                            <td><?php echo e($mahasiswa->nim); ?></td>
                                            <td><?php echo e($mahasiswa->tempat_lahir); ?> , <?php echo e(date('d M Y',strtotime($mahasiswa->tanggal_lahir))); ?></td>
                                            <td><?php echo e($mahasiswa->jenis_kelamin); ?></td>
                                            <td><?php echo e($mahasiswa->program_study->nama_prody); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.mahasiswa.show', [$mahasiswa])); ?>" class="btn btn-sm btn-warning text-white"> <i class="fa fa-eye"></i> </a>              
                                                <a href="<?php echo e(route('admin.mahasiswa.edit', [$mahasiswa])); ?>" class="btn btn-sm btn-info my-1"> <i class="fa fa-edit"></i> </a>              
                                                <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="<?php echo e(route('admin.mahasiswa.destroy', [$mahasiswa])); ?>" method="post">
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
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/admin/mahasiswa/index.blade.php ENDPATH**/ ?>