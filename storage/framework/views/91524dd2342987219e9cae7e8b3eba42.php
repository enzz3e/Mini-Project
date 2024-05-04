<?php $__env->startSection('content'); ?>
    <div class="container index-barang">
        <h2 class="pb-4">Daftar Barang</h2>
        <a class="btn btn-tambah" href="<?php echo e(route('barangs.create')); ?>">Tambah Barang</a>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Satuan Barang</th>
                    <th scope="col">Deskripsi Barang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($barang->kode_barang); ?></td>
                        <td><?php echo e($barang->nama_barang); ?></td>
                        <td><?php echo e($barang->harga_barang); ?></td>
                        <td><?php echo e($barang->satuan->kode_satuan); ?></td>
                        <td><?php echo e($barang->deskripsi_barang); ?></td>

                        <td>
                            <a class="btn btn-sm btn-success" href="<?php echo e(route('barangs.show', $barang->id)); ?>">Detail</a>
                            <a class="btn btn-sm btn-info" href="<?php echo e(route('barangs.edit', $barang->id)); ?>">Edit</a>
                            <form action="<?php echo e(route('barangs.destroy', $barang->id)); ?>" method="POST" type="button"
                                class="btn btn-danger p-0" onsubmit="return confirm('Hapus Data ?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger m-0 border-0">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masterBarangUts\resources\views/list-barang/index.blade.php ENDPATH**/ ?>