<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
            <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>
        <?php else: ?>
            <title><?php echo e(config('app.name')); ?></title>
        <?php endif; ?>
        <meta name="description" content="Technical test for Paymedy">

        <link rel="preconnect" href="https://rsms.me">
        <link rel="preload" href="https://rsms.me/inter/inter.css" as="style">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(url(asset('apple-touch-icon.png'))); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(url(asset('favicon-32x32.png'))); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(url(asset('favicon-16x16.png'))); ?>">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(url(mix('css/app.css'))); ?>">

        <!-- Scripts -->
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    </head>

    <body>
        <?php echo $__env->yieldContent('body'); ?>
    </body>
</html>
<?php /**PATH /Users/alan/sites/paymedy/resources/views/layouts/base.blade.php ENDPATH**/ ?>