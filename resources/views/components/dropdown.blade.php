<div x-data="{ open: false }">
    <span @click="open = !open">{{ $trigger }}</span>
    <div
        @click.away="open = false"
        x-bind:class="open ? '{{ $attributes['open-class'] }}' : '{{ $attributes['closed-class'] }}'"
    >
        {{ $slot }}
    </div>
</div>
