<!--
@todo Implement type prop to allow for different notification types, e.g. warning, alert, error, etc
This type can define the notification colour and icon type
-->
<div
    class="flex items-center justify-between bg-blue-600 text-white rounded-full py-0.5 pl-4 {{ $attributes['class'] }}"
    role="alert"
>
    <div class="flex items-center text-sm gap-2">
        <x-icon.check-circle class="w-5" />
        {{ $slot }}
    </div>

    <button class="flex items-center justify-center h-12 w-12">
        <x-icon.times />
        <span class="sr-only">
            Close Notification
        </span>
    </button>
</div>
