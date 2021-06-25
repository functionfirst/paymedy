<div
    class="alert flex items-center bg-yellow-200 text-yellow-800 px-4 py-2 rounded-full"
    role="alert"
>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon.exclamation-circle','data' => ['class' => 'w-5 mr-2']]); ?>
<?php $component->withName('icon.exclamation-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-5 mr-2']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php echo e($slot); ?>

</div>
<?php /**PATH /Users/alan/sites/paymedy/resources/views/components/alert.blade.php ENDPATH**/ ?>