<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai
                
                <a href="<?php echo e(route('tambah.nilai')); ?>" class="btn btn-md btn-primary float-right">Tambah Nilai</a>
                </div>

                <div class="body-header">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr bgcolor="#00BFFF">
                                <th>NO. </th>
                                <th>NPM</th>
                                <th>NAMA LENGKAP</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr> 
                            <?php
                                $no = 1;
                            ?>
                            <?php $__currentLoopData = $nilai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr bgcolor="#483D8B">
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($n->mahasiswa->npm); ?></td>
                            <td><?php echo e($n->mahasiswa->user->name); ?></td>
                            <td><?php echo e($n->makul->nama_makul); ?></td>
                            <td><?php echo e($n->makul->sks); ?></td>
                            <td><?php echo e($n->nilai); ?></td>
                                <td> 
                                    <a href="<?php echo e(route('edit.nilai', $n->id)); ?>" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="<?php echo e(route('hapus.nilai', $n->id)); ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4c\resources\views/nilai/index.blade.php ENDPATH**/ ?>