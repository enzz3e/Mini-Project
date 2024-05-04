<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2 class="pb-4">Tambah Barang</h2>

        <div class="input-tambah">
            <form class="row g-3" action="<?php echo e(route('barangs.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="col-md-6">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control" id="kode_barang" required>
                </div>

                <div class="col-md-6">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" required>
                </div>

                <div class="col-md-6">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input type="number" name="harga_barang" class="form-control" id="harga_barang" required>
                </div>

                <div class="col-md-6">
                    <label for="satuan_barang" class="form-label">Satuan Barang</label>
                    <select id="satuan_barang" name="satuan_barang" class="form-select" required>
                        <?php $__currentLoopData = $satuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ssatuans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($ssatuans->id); ?>" <?php echo e(old('s') == $ssatuans->id ? 'selected' : ''); ?>>
                                <?php echo e($ssatuans->kode_satuan . ' - ' . $ssatuans->nama_satuan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                    <textarea name="deskripsi_barang" class="form-control" id="deskripsi_barang" cols="30" rows="3" required></textarea>
                </div>

                <div class="col-12">
                    <a class="btn btn-outline-secondary px-4 mt-3" href="<?php echo e(route('barangs.index')); ?>">Kembali</a>
                    <button type="submit" class="btn btn-primary px-4 mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masterBarangUts\resources\views/list-barang/create.blade.php ENDPATH**/ ?>