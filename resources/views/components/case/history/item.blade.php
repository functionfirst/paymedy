<div class="flex gap-2 rounded-full border border-gray-200 p-2 text-sm">
    <div class="flex items-center justify-center rounded-full w-10 h-10 {{ $iconClass }}">
        <x-dynamic-component
            :component="$icon"
            class="w-6"
        />
    </div>

    <div>
        <p>
            {{ $slot }}
        </p>

        <span class="text-gray-500">{{ $label }}</span>
    </div>
</div>
