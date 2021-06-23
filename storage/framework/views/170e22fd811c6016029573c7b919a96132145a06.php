<section class="rounded-3xl bg-gray-600 text-white p-8 pb-24">
    <header class="flex items-center justify-between mb-8">
        <h1 class="text-2xl font-extrabold">
            Case Details #668919
        </h1>

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alert','data' => []]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Action Required <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </header>

    <div class="grid grid-cols-2 gap-6">
        <div class="flex flex-col-reverse">
            <label class="font-semibold text-xs text-gray-300">Date</label>

            05 Jan, 2021
        </div>

        <div class="flex flex-col-reverse">
            <label class="font-semibold text-xs text-gray-300">Customer</label>

            <a href="#customer-5435678" class="transition-colors text-yellow-300 hover:text-yellow-400">
                Karen Hartley (ID 5435678)
            </a>
        </div>

        <div class="flex flex-col-reverse">
            <label class="font-semibold text-xs text-gray-300">Product</label>

            Colombia - El Muro
        </div>

        <div class="flex flex-col-reverse">
            <label class="font-semibold text-xs text-gray-300">Value</label>

            $8.75
        </div>
    </div>
</section>
<?php /**PATH /Users/alan/sites/paymedy/resources/views/components/case/details.blade.php ENDPATH**/ ?>