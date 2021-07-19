<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                    <form action="<?php echo e(route('simpan.mahasiswa')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <div class="form-row">

                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value= disabled selected>--Pilih User--</option>

                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" place="Masukkan NPM" maxleght = "8">
                                </div>
                                <div class="col">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" place="Tambahkan Tempat Lahir">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" place="Tambahkan Tanggal Lahir">
                                </div>
                                <div class="col">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value= disabled selected>--Pilih Jenis Kelamin--</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" place="Masukkan Telepon">
                                </div>
                            </div>
                        </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="">Alamat</label>
                                            <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none"></textarea>
                                        </div>
                                    </div>
                                </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="<?php echo e(route('makul')); ?>" class="btn btn-md btn-danger">BATAL</a>
                                </div>
    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4c\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>