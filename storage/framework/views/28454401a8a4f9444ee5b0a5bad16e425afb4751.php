
<div class="container">
    
    
    <div class="banner mt-4">
        <img src="<?php echo e(url('assets/slider/slider.png')); ?>" alt="">
    </div>

    
    <section class="productcategory mt-4">
        <h3><strong>Pilih Jenis Tas</strong></h3>
        <div class="row mt-4">
            <?php $__currentLoopData = $productcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card shadow">
                    <div class="card-body text-center">
                      <img src="<?php echo e(url('assets/productcategory')); ?>/<?php echo e($productcategory->gambar); ?>" class="img-fluid">
                    </div>
                  </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    
    <section class="products mt-5 mb-5">
        <h3>
           <strong>Produk Terbaik</strong>
            <a href="<?php echo e(route('products')); ?>" class="btn btn-dark float-right"><i class="fas fa-eye">Lihat Semua</i></a>
         </h3>
        <div class="row mt-4">
           <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="col">
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
     </section>
</div>
<?php /**PATH D:\xampp\htdocs\taskobers\resources\views/livewire/home.blade.php ENDPATH**/ ?>