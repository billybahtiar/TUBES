<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <center>
                <legend><strong>DAFTAR NILAI MAHASISWA</strong></legend>
                <table>
                    <tr>
                        <td>Kode Mata Kuliah</td>
                        <td>: <?php echo e($krs->mata_kuliah->kode_mata_kuliah); ?></td>
                    </tr>
                    <tr>
                        <td>Nama Mata Kuliah</td>
                        <td>: <?php echo e($krs->mata_kuliah->nama_mata_kuliah); ?></td>
                    </tr>
                    <tr>
                        <td>SKS</td>
                        <td>: <?php echo e($krs->mata_kuliah->sks); ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Akademik (Semester)</td>
                        <td>: <?php echo e($krs->tahun_akademik->tahun_akademik); ?>(<?php echo e($krs->tahun_akademik->semester); ?>)</td>
                    </tr>
                </table>
            </center>

            <table class="table table-hover table-bordered table-striped mt-4">
                <tr>
                    <td>NO</td>
                    <td>NIM</td>
                    <td>NAMA LENGKAP</td>
                    <td>NILAI</td>
                </tr>
                <?php $__currentLoopData = $ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key + 1); ?></td>
                        <td><?php echo e($nim = \App\Models\Krs::find($id)->nim); ?></td>
                        <td><?php echo e(\App\Models\Mahasiswa::where('nim', $nim)->first()->nama_lengkap); ?></td>
                        <td><?php echo e(\App\Models\Krs::find($id)->nilai); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/admin/input_nilai/daftar_nilai.blade.php ENDPATH**/ ?>