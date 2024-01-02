<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0"><?php echo e(__('KARTU RENCANA STUDI (KRS)')); ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <center class="mb-2">
                <legend class="mt-3"><strong>KARTU RENCANA STUDI</strong></legend>
               
                <table>
                    <tr>
                        <td><strong>NIM</strong></td>
                        <td>&nbsp;: <?php echo e($data_krs['nim']); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nama Lengkap</strong></td>
                        <td>&nbsp;: <?php echo e($data_krs['nama_lengkap']); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Program Study</strong></td>
                        <td>&nbsp;: <?php echo e($data_krs['prody']); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tahun Akademik (Semester)</strong></td>
                        <td>&nbsp;:<?php echo e($data_krs['tahun_akademik']); ?>(<?php echo e($data_krs['semester']); ?>)</td>
                    </tr>
                </table>
            </center>
            
            <a href="<?php echo e(route('admin.krs.create', [$data_krs['nim'],$data_krs['tahun_akademik_id']])); ?>" class="btn btn-sm btn-primary"> <i class="fa fa-plus fa-sm"></i> Tambah Data</a>

            <table class="table table-bordered table-hover table-striped mt-4">
                <tr>
                    <th>NO</th>
                    <th>KODE MATA KULIAH</th>
                    <th>NAMA MATA KULIAH</th>
                    <th>SKS</th>
                    <th colspan="2">AKSI</th>
                </tr>
                <?php $total_sks = 0 ?>
                <?php $__currentLoopData = $data_krs['select_krs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $krs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td width="20px"><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($krs->kode_mata_kuliah); ?></td>
                        <td><?php echo e($krs->nama_mata_kuliah); ?></td>
                        <td><?php echo e($total_sks += $krs->sks); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.krs.edit', $krs->id)); ?>" class="btn btn-sm btn-info my-1"> <i class="fa fa-edit"></i> </a>              
                            <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="<?php echo e(route('admin.krs.destroy', $krs->id)); ?>" method="post">
                                <?php echo csrf_field(); ?> 
                                <?php echo method_field('delete'); ?>
                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                            </form>                              
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td colspan="3" align="right"><strong>Jumlah SKS</strong></td>
                    <td colspan="2"><strong><?php echo e($total_sks); ?></strong></td>
                </tr>
            </table>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/admin/krs/show.blade.php ENDPATH**/ ?>