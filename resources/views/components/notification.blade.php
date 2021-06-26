<div
    class="flex items-start justify-between bg-blue-600 text-white rounded-3xl py-0.5 pl-4 {{ $attributes['class'] }}"
    role="alert"
>
    <div class="flex flex-1 items-start lg:items-center text-sm gap-2 py-3 lg:py-1">
        <x-icon.check-circle class="w-6" />

        <div class="flex-1">
            {{ $slot }}
        </div>
    </div>

    <button class="flex items-center justify-center h-12 w-12">
        <x-icon.times />
        <span class="sr-only">
            Close Notification
        </span>
    </button>
</div>
