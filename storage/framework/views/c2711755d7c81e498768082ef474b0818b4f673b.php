<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.case.history.item','data' => ['iconClass' => 'bg-brand text-white','icon' => 'icon.microphone','label' => 'Support called Customer...']]); ?>
<?php $component->withName('case.history.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['iconClass' => 'bg-brand text-white','icon' => 'icon.microphone','label' => 'Support called Customer...']); ?>
    <?php echo e($slot); ?>

 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /Users/alan/sites/paymedy/resources/views/components/case/history/support-call.blade.php ENDPATH**/ ?>