<!--
@todo  Implement type prop to allow for different notification types, e.g. warning, alert, error, etc
This type can define the notification colour and icon type
-->
<div
    class="flex items-center justify-between bg-blue-600 text-white rounded-full py-0.5 pl-4 <?php echo e($attributes['class']); ?>"
    role="alert"
>
    <div class="flex items-center text-sm gap-2">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon.check-circle','data' => ['class' => 'w-5']]); ?>
<?php $component->withName('icon.check-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-5']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php echo e($slot); ?>

    </div>

    <button class="flex items-center justify-center h-12 w-12">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon.times','data' => []]); ?>
<?php $component->withName('icon.times'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <span class="sr-only">
            Close Notification
        </span>
    </button>
</div>
<?php /**PATH /Users/alan/sites/paymedy/resources/views/components/notification.blade.php ENDPATH**/ ?>