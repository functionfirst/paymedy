<div class="flex flex-col items-center justify-center my-6">
  <h4 class="text-xs leading-4 font-medium px-3 py-1 rounded-full text-gray-800 bg-gray-100 mb-6">
    <?php echo e($date); ?>

  </h4>

  <div class="flex flex-col md:flex-row w-full gap-6">
    <div class="flex flex-col gap-4 flex-1 mr-12">
      <?php echo e($merchant ?? ''); ?>

    </div>

    <div class="border-l-2 border-gray-300 hidden md:block <?php if($consumer ?? null && $merchant ?? null ): ?> 'hidden' <?php endif; ?>"></div>

    <div class="flex flex-col gap-4 flex-1 ml-12 <?php if($consumer ?? ''): ?> 'hidden md:flex' <?php endif; ?> ">
      <?php echo e($consumer ?? ''); ?>

    </div>
  </div>
</div>
<?php /**PATH /Users/alan/sites/paymedy/resources/views/components/case/history/event.blade.php ENDPATH**/ ?>