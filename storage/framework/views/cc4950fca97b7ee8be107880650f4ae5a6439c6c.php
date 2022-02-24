<div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                Kobers<strong>Bag</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Pilih Tasmu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <?php $__currentLoopData = $productcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><a class="dropdown-item" href="<?php echo e(route('products.tas', $productcategory->id)); ?>"><?php echo e($productcategory->nama); ?></a></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <li><a class="dropdown-item" href="<?php echo e(route('products')); ?>">Semua Jenis Tas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('history')); ?>">History</a>
                    </li> 
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo e(route('keranjang')); ?>>
                            Keranjang<i class="fas fa-shopping-bag"></i></a>

                            <?php if($jumlah_pesanan !== 0): ?>
                            <span class="badge badge-danger"><?php echo e($jumlah_pesanan); ?></span>
                            <?php endif; ?>
                        </li>
                    <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
<?php /**PATH D:\xampp\htdocs\taskobers\resources\views/livewire/navbar.blade.php ENDPATH**/ ?>