<nav
    id="mainNav"
    role="navigation"
    aria-label="Main Navigation"
    class="{{ $attributes['class'] }} font-semibold text-sm leading-5"
    x-data="{ open: false }"
>
    <button
        class="flex flex-col items-center justify-center w-12 h-12 md:hidden"
        @click="open = !open"
    >
        <x-icon.menu class="w-5" />
        <span class="sr-only">Menu</span>
    </button>
 
    <ul class="p-3 md:p-0 grid shadow-md md:shadow-none bg-white w-full left-0 right-0 md:w-auto items-center gap-3 md:gap-6 absolute md:relative flex-col md:flex-row" x-bind:class="open ? '' : 'hidden md:flex'">
        @foreach ($navigation as $item)
            <li>
                <a
                    href="{{ route($item['route']) }}"
                    class="flex gap-2 py-4 md:py-2 px-4 items-center transition-colors group rounded-full {{ $item['active'] ? ' bg-brand text-white hover:bg-gray-900' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-200' }}"
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
