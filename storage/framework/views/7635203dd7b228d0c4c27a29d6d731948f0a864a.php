<div x-data="{ open: false }">
    <span @click="open = !open"><?php echo e($trigger); ?></span>
    <?php echo e($attributes['open-class']); ?>

    <div
        @click.away="open = false"
        x-bind:class="open ? '<?php echo e($attributes['open-class']); ?>' : '<?php echo e($attributes['closed-class']); ?>'"
    >
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH /Users/alan/sites/paymedy/resources/views/components/dropdown.blade.php ENDPATH**/ ?>