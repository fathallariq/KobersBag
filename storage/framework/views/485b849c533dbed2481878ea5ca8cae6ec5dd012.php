
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal Pesan</td>
                            <td>Kode Pemesanan</td>
                            <td>Pesanan</td>
                            <td>Status</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php $__empty_1 = true; $__currentLoopData = $pesanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($pesanan->created_at); ?></td>
                            <td><?php echo e($pesanan->kode_pemesanan); ?></td>
                            <td>
                                <?php $pesanan_details = \App\Models\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                                <?php $__currentLoopData = $pesanan_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e(url('assets/tas')); ?>/<?php echo e($pesanan_detail->product->gambar); ?>"
                                    class="img-fluid" width="50">
                                <?php echo e($pesanan_detail->product->nama); ?>

                                <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php if($pesanan->status == 1): ?>
                                Belum Lunas
                                <?php else: ?>
                                Lunas
                                <?php endif; ?>
                            </td>
                            <td><strong>Rp. <?php echo e(number_format($pesanan->total_harga)); ?></strong></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>
                        <?php endif; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <p>Untuk pembayaran silahkan dapat transfer ke rekening dibawah ini : </p>
                    <div class="media">
                        <img class="mr-3" src="<?php echo e(url('assets/bri.png')); ?>" alt="Bank BRI" width="60">
                        <div class="media-body">
                            <h5 class="mt-0">BANK BRI</h5>
                            No. Rekening 012345-678-910 atas nama <strong>Faiz AM </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\taskobers\resources\views/livewire/history.blade.php ENDPATH**/ ?>