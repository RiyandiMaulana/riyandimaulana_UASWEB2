<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Makul

                <a href="<?php echo e(route('tambah.makul')); ?>" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr bgcolor="#00BFFF">
                            <th>NO.</th>
                            <th>KODE MAKUL</th>
                            <th>NAMA MAKUL</th>
                            <th>SKS</th>
                            <th>AKSI</th>
                        </tr>

                        <?php $__currentLoopData = $makul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr bgcolor="#483D8B">
                            <td><?php echo e($mk->id); ?></td>
                            <td><?php echo e($mk->kd_makul); ?></td>
                            <td><?php echo e($mk->nama_makul); ?></td>
                            <td><?php echo e($mk->sks); ?></td>
                            <td>
                                <a href="<?php echo e(route('edit.makul', $mk->id)); ?>" class="btn btn-sm btn-warning">EDIT</a>
                                <a href="<?php echo e(route('hapus.makul', $mk->id)); ?>" class="btn btn-sm btn-danger">HAPUS</a>
                
                            </td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4c\resources\views/makul/index.blade.php ENDPATH**/ ?>