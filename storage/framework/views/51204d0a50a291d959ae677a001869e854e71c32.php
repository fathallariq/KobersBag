
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                </ol>
              </nav>
        </div>
    </div> 

    <div class="row">
        <div class="col md-12">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('message')); ?>

            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Gambar</td>
                            <td>Keterangan</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php $__empty_1 = true; $__currentLoopData = $pesanan_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td>
                                <img src="<?php echo e(url('assets/tas')); ?>/<?php echo e($pesanan_detail->product->gambar); ?>" class="img-fluid" width="200">
                            </td>
                            <td>
                                <?php echo e($pesanan_detail->product->nama); ?>

                            </td>
                            <td><?php echo e($pesanan_detail->jumlah_pesanan); ?></td>
                            <td>Rp. <?php echo e(number_format($pesanan_detail->product->harga)); ?></td>
                            <td><strong>Rp. <?php echo e(number_format($pesanan_detail->total_harga)); ?></strong></td>
                            <td>
                                <i wire:click="destroy(<?php echo e($pesanan_detail->id); ?>)" class="fas fa-trash text-danger"></i>
                            </td>
                        </tr>  
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7">Data Kosong </td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if(!empty($pesanan)): ?>
                        <tr>
                            <td colspan="6" align="right"><strong>Total Harga : </strong></td>
                            <td align="right"><strong>Rp. <?php echo e(number_format($pesanan->total_harga)); ?></strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Kode Unik : </strong></td>
                            <td align="right"><strong>Rp. <?php echo e(number_format($pesanan->kode_unik)); ?></strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Total Yang Harus dibayarkan : </strong></td>
                            <td align="right"><strong>Rp. <?php echo e(number_format($pesanan->total_harga+$pesanan->kode_unik)); ?></strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2">
                                <a href="<?php echo e(route('checkout')); ?>" class="btn btn-success btn-blok">
                                    <i class="fas fa-arrow-right"></i> Check Out
                                </a>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\taskobers\resources\views/livewire/keranjang.blade.php ENDPATH**/ ?>