<div class="flex flex-col items-center justify-center my-6">
  <h4 class="text-xs leading-4 font-medium px-3 py-1 rounded-full text-gray-800 bg-gray-100 mb-6">
    {{ $date }}
  </h4>

  <div class="flex w-full gap-6">
    <div class="flex flex-col gap-4 flex-1">
      {{ $merchant ?? '' }}
    </div>

    <div class="border-l-2 border-gray-300"></div>

    <div class="flex flex-col gap-4 flex-1">
      {{ $consumer ?? '' }}
    </div>
  </div>
</div>
