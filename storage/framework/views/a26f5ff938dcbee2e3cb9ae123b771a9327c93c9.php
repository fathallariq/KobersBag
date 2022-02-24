
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo e(route('products')); ?>" class="text-dark">Pilih Tasmu</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detail Tasmu</li>
                </ol>
              </nav>
        </div>
    </div> 

    <div class="row">
        <div class="col md-12">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-productdetail">
                <div class="card-body">
                    <img src="<?php echo e(url('assets/tas')); ?>/<?php echo e($product->gambar); ?>" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h2>
                <strong><?php echo e($product->nama); ?></strong>
            </h2>
            <h4>Rp.<?php echo e(number_format($product->harga)); ?>

                <?php if($product->is_ready == 1): ?>
                <span class="badge badge-success"> <i class="fas fa-check"></i> Ready Stok</span>
                <?php else: ?>
                <span class="badge badge-danger"> <i class="fas fa-times"></i> Stok Habis</span>
                <?php endif; ?>
            </h4>


            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="masukkanKeranjang">
                    <table class="table" style="border-top: hidden">
                        
                        <tr>
                            <td>Berat</td>
                            <td>:</td>
                            <td><?php echo e($product->berat); ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td>
                                <input id="jumlah_pesanan" type="number"
                                    class="form-control <?php $__errorArgs = ['jumlah_pesanan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    wire:model="jumlah_pesanan" value="<?php echo e(old('jumlah_pesanan')); ?>" required
                                    autocomplete="name" autofocus>

                                <?php $__errorArgs = ['jumlah_pesanan'];
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
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <button type="submit" class="btn btn-dark btn-block" <?php if($product->is_ready !== 1): ?> disabled <?php endif; ?>><i class="fas fa-shopping-cart"></i>  Masukkan Keranjang</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>    
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\taskobers\resources\views/livewire/product-detail.blade.php ENDPATH**/ ?>