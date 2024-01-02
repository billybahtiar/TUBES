<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <center class="mb-2">
                <legend class="mt-3"><strong>KARTU HASIL STUDI</strong></legend>
               
                <table>
                    <tr>
                        <td><strong>NIM</strong></td>
                        <td>&nbsp;: <?php echo e($data_khs['nim']); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nama Lengkap</strong></td>
                        <td>&nbsp;: <?php echo e($data_khs['nama_lengkap']); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Program Study</strong></td>
                        <td>&nbsp;: <?php echo e($data_khs['prody']); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tahun Akademik (Semester)</strong></td>
                        <td>&nbsp;:<?php echo e($data_khs['tahun_akademik']); ?>(<?php echo e($data_khs['semester']); ?>)</td>
                    </tr>
                </table>
            </center>
            
            

            <table class="table table-bordered table-hover table-striped mt-4">
                <tr>
                    <th>NO</th>
                    <th>KODE MATA KULIAH</th>
                    <th>NAMA MATA KULIAH</th>
                    <th>SKS</th>
                    <th>NILAI</th>
                    <th>SKOR</th>
                </tr>
                <?php 
                    $total_sks = 0;
                    $total_nilai = 0;
                    function skorNilai($nilai, $sks) {
                        if($nilai == 'A') $skor= 4 * $sks;
                            else if($nilai == 'B') $skor = 3 * $sks;
                                else if($nilai == 'C') $skor = 2 * $sks;
                                    else if($nilai == 'D') $skor = 1 * $sks;
                                     else $skor = 0;
                                return $skor;
                    }
                ?>
                <?php $__currentLoopData = $data_khs['mhs_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $khs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td width="20px"><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($khs->kode_mata_kuliah); ?></td>
                        <td><?php echo e($khs->nama_mata_kuliah); ?></td>
                        <?php 
                            $total_sks += $khs->sks;
                            $total_nilai += skorNilai($khs->nilai,$khs->sks)
                        ?>
                        <td><?php echo e($khs->sks); ?></td>
                        <td><?php echo e($khs->nilai); ?></td>
                        <td><?php echo e(skorNilai($khs->nilai,$khs->sks)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td colspan="3" class="text-center"><strong>Total</strong></td>
                    <td ><strong><?php echo e($total_sks); ?></strong></td>
                    <td ></td>
                    <td ><strong><?php echo e($total_nilai); ?></strong></td>
                </tr>
            </table>
            Index Prestasi: <?php echo e(number_format($total_nilai/$total_sks,2)); ?>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web E\Project Laravel\resources\views/admin/khs/show.blade.php ENDPATH**/ ?>