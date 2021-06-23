<div class="flex flex-col items-center justify-center my-6">
  <h4 class="text-xs leading-4 font-medium px-3 py-1 rounded-full text-gray-800 bg-gray-100 mb-6">
    <?php echo e($date); ?>

  </h4>

  <div class="flex w-full gap-6">
    <div class="flex flex-col gap-4 flex-1">
      <?php echo e($merchant ?? ''); ?>

    </div>

    <div class="border-l-2 border-gray-300"></div>

    <div class="flex flex-col gap-4 flex-1">
      <?php echo e($consumer ?? ''); ?>

    </div>
  </div>
</div>
<?php /**PATH /Users/alan/sites/paymedy/resources/views/components/case/history/event.blade.php ENDPATH**/ ?>