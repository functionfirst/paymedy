<nav
    id="mainNav"
    role="navigation"
    aria-label="Main Navigation"
    class="<?php echo e($attributes['class']); ?> font-semibold text-sm leading-5"
    x-data="{ open: false }"
>
    <button
        class="flex flex-col items-center justify-center w-12 h-12 md:hidden"
        @click="open = !open"
    >
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon.menu','data' => ['class' => 'w-5']]); ?>
<?php $component->withName('icon.menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-5']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <span class="sr-only">Menu</span>
    </button>
 
    <ul class="p-3 md:p-0 grid shadow-md md:shadow-none bg-white w-full left-0 right-0 md:w-auto items-center gap-3 md:gap-6 absolute md:relative flex-col md:flex-row" x-bind:class="open ? '' : 'hidden md:flex'">
        <?php $__currentLoopData = $navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a
                    href="<?php echo e(route($item['route'])); ?>"
                    class="flex gap-2 py-4 md:py-2 px-4 items-center transition-colors group rounded-full <?php echo e($item['active'] ? ' bg-brand text-white hover:bg-gray-900' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-200'); ?>"
                >
                    <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\DynamicComponent::class, ['component' => $item['icon']]); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-5 transition-colors '.e($item['active'] ? 'text-white' : 'text-gray-400 group-hover:text-gray-600').'']); ?>
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
<?php /**PATH /Users/alan/sites/paymedy/resources/views/components/navigation.blade.php ENDPATH**/ ?>