
<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Pilih Tasmu</li>
                </ol>
              </nav>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-9">
            <h2>Pilih <strong>Tasmu</strong></h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Search . . ." aria-label="Search"
                    aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <section class="products mb-5">
        <div class="row mt-4">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="<?php echo e(url('assets/tas')); ?>/<?php echo e($product->gambar); ?>" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong><?php echo e($product->nama); ?></strong> </h5>
                                <h5>Rp. <?php echo e(number_format($product->harga)); ?></h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="<?php echo e(route('products.detail', $product->id)); ?>" class="btn btn-dark btn-block"><i class="fas fa-eye">Detail</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        

        <div class="row">
            <div class="col">
                <?php echo e($products->links('layouts.pagination-links')); ?>

            </div>
        </div>

    </section>
</div>
<?php /**PATH D:\xampp\htdocs\taskobers\resources\views/livewire/product-index.blade.php ENDPATH**/ ?>