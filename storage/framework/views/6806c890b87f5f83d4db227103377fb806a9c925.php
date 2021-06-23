<nav
    role="navigation"
    aria-label="Protect Navigation"
    class="<?php echo e($attributes['class']); ?> text-sm font-semibold"
>
    <ul class="grid gap-2">
        <?php $__currentLoopData = $navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a
                    href="<?php echo e(route($item['route'])); ?>"
                    class="flex gap-2 items-center transition-colors group rounded-full py-2 px-4 text-gray-600 hover:text-gray-800 <?php echo e($item['active'] ? 'bg-gray-100 hover:bg-gray-200' : 'hover:bg-gray-100'); ?>"
                >
                    <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\DynamicComponent::class, ['component' => $item['icon']]); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'transition-colors text-gray-400 w-6 group-hover:text-gray-600']); ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php echo e($item['name']); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>
<?php /**PATH /Users/alan/sites/paymedy/resources/views/components/sidebar.blade.php ENDPATH**/ ?>