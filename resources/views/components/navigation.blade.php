<nav
    id="mainNav"
    role="navigation"
    aria-label="Main Navigation"
    class="{{ $attributes['class'] }} font-semibold text-sm leading-5"
>
    <ul class="flex items-center gap-6">
        @foreach ($navigation as $item)
            <li>
                <a
                    href="{{ route($item['route']) }}"
                    class="flex gap-2 py-2 px-4 items-center transition-colors group rounded-full {{ $item['active'] ? ' bg-brand text-white hover:bg-gray-900' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-200' }}"
                >
                    <x-dynamic-component
                        :component="$item['icon']"
                        class="w-5 transition-colors {{ $item['active'] ? 'text-white' : 'text-gray-400 group-hover:text-gray-600' }}"
                    />
                    {{ $item['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
