<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/fontawesome/css/all.min.css')); ?>" rel="stylesheet">
    
    <?php echo \Livewire\Livewire::styles(); ?>


</head>

<body>
    <div id="app">
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navbar')->html();
} elseif ($_instance->childHasBeenRendered('dfLilav')) {
    $componentId = $_instance->getRenderedChildComponentId('dfLilav');
    $componentTag = $_instance->getRenderedChildComponentTagName('dfLilav');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dfLilav');
} else {
    $response = \Livewire\Livewire::mount('navbar');
    $html = $response->html();
    $_instance->logRenderedChild('dfLilav', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </main>

    </div>

    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\taskobers\resources\views/layouts/app.blade.php ENDPATH**/ ?>