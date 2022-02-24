
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('keranjang')); ?>" class="text-dark">Keranjang</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('message')); ?>

            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="<?php echo e(route('keranjang')); ?>" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h4>Informasi Pembayaran</h4>
            <hr>
            <p>Untuk pembayaran silahkan dapat transfer ke rekening dibawah ini sebesar : <strong> Rp. <?php echo e(number_format($total_harga)); ?></strong> </p>
            <div class="media">
                <img class="mr-3" src="<?php echo e(url('assets/bri.png')); ?>" alt="Bank BRI" width="60">
                <div class="media-body">
                    <h5 class="mt-0">BANK BRI</h5>
                    No. Rekening 012345-678-910 atas nama <strong>Faiz AM</strong>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>Informasi Pengiriman</h4>
            <hr>
            <form wire:submit.prevent="checkout">

                <div class="form-group">
                    <label for="">No. HP</label>
                    <input id="nohp" type="text" class="form-control <?php $__errorArgs = ['nohp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" wire:model="nohp"
                    value="<?php echo e(old('nohp')); ?>" autocomplete="name" autofocus>

                    <?php $__errorArgs = ['nohp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea wire:model="alamat" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></textarea>

                    <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <br>
                <button type="submit" class="btn btn-success btn-block"> <i class="fas fa-arrow-right"></i> Checkout </button>
            </form>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\taskobers\resources\views/livewire/checkout.blade.php ENDPATH**/ ?>