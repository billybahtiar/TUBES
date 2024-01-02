<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <center class="mb-2">
                <legend class="mt-3"><strong>MASUKKAN NILAI AKHIR</strong></legend>
               
                <table>
                    <tr>
                        <td>Kode Mata Kuliah</td>
                        <td>&nbsp;: <?php echo e($data['kode_mata_kuliah']); ?></td>
                    </tr>
                    <tr>
                        <td>Nama Mata Kuliah</td>
                        <td>&nbsp;: <?php echo e($data['nama_mata_kuliah']); ?></td>
                    </tr>
                    <tr>
                        <td>SKS</td>
                        <td>&nbsp;: <?php echo e($data['sks']); ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Akademik (Semester)</td>
                        <td>&nbsp;: <?php echo e($data['tahun_akademik']); ?>(<?php echo e($data['semester']); ?>)</td>
                    </tr>
                
                </table>
            </center>
            
            <form action="<?php echo e(route('admin.input_nilai.store')); ?>" method="post">
                <?php echo csrf_field(); ?> 
                <table class="table table-striped table-hover table-bordered mt-4">
                    <tr>
                        <td width="25px">NO</td>
                        <td>NIM</td>
                        <td>NAMA MAHASISWA</td>
                        <td>NILAI</td>
                    </tr>
                    <?php $__currentLoopData = $data['list_nilai']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($nilai->nim); ?></td>
                            <td><?php echo e($nilai->nama_lengkap); ?></td>
                            <input type="hidden" name="id[]" value="<?php echo e($nilai->id); ?>">
                            <td width="25px">
                                <input type="text" name="nilai[]" placeholder="C" class="form-control" value="<?php echo e($nilai->nilai); ?>">
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/admin/input_nilai/show.blade.php ENDPATH**/ ?>