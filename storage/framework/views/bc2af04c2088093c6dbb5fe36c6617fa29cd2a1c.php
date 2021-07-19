<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Nilai
                
                </div>

                <div class="card-body">
                    <form action="<?php echo e(route('update.nilai', $nilai->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="mahasiswa_id" class="col-md-4 text-md-right">Nama Mahasiswa</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="mahasiswa_id" id="mahasiswa_id">
                                        <option value="disabled selected">--- Pilih Nama ---</option>
                                            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($mhs->id); ?>" <?php echo e($nilai->mahasiswa_id == $mhs->id ? 'selected' : ''); ?> > <?php echo e($mhs->user->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">        
                            <label for="makul_id" class="col-md-4 text-md-right">Nama Matakuliah</label>
                                <div class="col-md-6">
                                    <select name="makul_id" id="makul_id" class="form-control">
                                        <option value="" disabled selected>-- Pilih Nama Makul --</option>
                                            <?php $__currentLoopData = $makul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($mk->id); ?>" <?php echo e($nilai->makul_id == $mk->id ? 'selected' : ''); ?> > <?php echo e($mk->nama_makul); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nilai" class="col-md-4 text-md-right">Nilai</label>
                                <div class="col-md-3">
                                    <input type="number" name="nilai" class="form-control" value="<?php echo e(is_null ($nilai) ? '' : $nilai->nilai); ?>">
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                        <a href="<?php echo e(route('nilai')); ?>" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>  
                    
                </div>
                    
            </div>
                
        </div>
            
    </div>
        
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4c\resources\views/nilai/edit.blade.php ENDPATH**/ ?>