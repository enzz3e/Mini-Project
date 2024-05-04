<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2 class="pb-4">Edit Barang</h2>

        <div class="input-edit">
            <form class="row g-3" action="<?php echo e(route('barangs.update', $data_barang->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="col-md-6">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" name="kode_barang" value="<?php echo e($data_barang->kode_barang); ?>" class="form-control"
                        id="kode_barang" readonly>
                </div>

                <div class="col-md-6">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" value="<?php echo e($data_barang->nama_barang); ?>" class="form-control"
                        id="nama_barang" requaired>
                </div>

                <div class="col-md-6">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input type="number" name="harga_barang" value="<?php echo e($data_barang->harga_barang); ?>" class="form-control"
                        id="harga_barang" requaired>
                </div>

                <div class="col-md-6">
                    <label for="satuan_barang" class="form-label">Satuan</label>
                    <select class="form-select" name="satuan_barang" id="satuan_barang" required>
                        <?php
                            $selected = '';
                            if ($errors->any()) {
                                $selected = old('satuan');
                            } else {
                                $selected = $data_barang->satuan_barang_id;
                            }
                        ?>
                        <?php $__currentLoopData = $satuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($s->id); ?>" <?php echo e($selected == $s->id ? 'selected' : ''); ?>>
                                <?php echo e($s->kode_satuan . ' - ' . $s->nama_satuan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                    <textarea name="deskripsi_barang" class="form-control" id="deskripsi_barang" cols="30" rows="3" requaired><?php echo e($data_barang->deskripsi_barang); ?></textarea>
                </div>

                <div class="col-12">
                    <a class="btn btn-outline-secondary px-4 mt-3" href="<?php echo e(route('barangs.index')); ?>">Kembali</a>
                    <button type="submit" class="btn btn-primary px-4 mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masterBarangUts\resources\views/list-barang/edit.blade.php ENDPATH**/ ?>