<div class="flex gap-2 rounded-full border border-gray-200 py-2 px-4 text-sm">
    <div class="flex items-center justify-center rounded-full w-10 h-10 <?php echo e($iconClass); ?>">
        <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\DynamicComponent::class, ['component' => $icon]); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-6']); ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>

    <div>
        <p>
            <?php echo e($slot); ?>

        </p>

        <span class="text-gray-500"><?php echo e($label); ?></span>
    </div>
</div>
<?php /**PATH /Users/alan/sites/paymedy/resources/views/components/case/history/item.blade.php ENDPATH**/ ?>