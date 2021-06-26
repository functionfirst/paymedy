<nav
    role="navigation"
    aria-label="Protect Navigation"
    class="{{ $attributes['class'] }} text-sm font-semibold mx-2 mb-4 lg:m-0 text-center"
>
    <ul class="grid md:flex lg:grid md:justify-center gap-2">
        @foreach ($navigation as $item)
            <li>
                <a
                    href="{{ route($item['route']) }}"
                    class="flex-1 flex gap-2 items-center transition-colors group rounded-full py-2 px-4 text-gray-600 hover:text-gray-800 {{ $item['active'] ? 'bg-gray-100 hover:bg-gray-200' : 'hover:bg-gray-100' }}"
                >
                    <x-dynamic-component
                        :component="$item['icon']"
                        class="transition-colors text-gray-400 w-6 group-hover:text-gray-600"
                    />
                    {{ $item['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
