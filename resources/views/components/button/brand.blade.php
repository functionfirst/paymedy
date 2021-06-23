<button
    class="transition-colors rounded-full flex items-center px-4 py-2 text-sm text-white bg-brand hover:bg-gray-900 {{ $attributes['class'] }}"
    type="{{ $attributes['type'] }}"
>
    {{ $slot }}    
</button>
