@extends('layouts.base')

@section('body')
    <div class="">
        <div class="bg-white shadow-md sticky top-0 z-50">
            <div class="flex max-w-6xl mx-auto items-center justify-center gap-6 md:justify-between md:py-1.5">
                <div class="flex gap-6 items-center">
                    <a
                        href="{{ route('home') }}"
                        class="flex items-center justify-center text-brand hover:text-gray-900 h-12 w-12"
                    >
                        <x-logo class="w-5 h-auto text-brand" />
                        <span class="sr-only">
                            Paymedy
                        </span>
                    </a>

                    <x-navigation :navigation="$navigation" />
                </div>
                <div class="flex gap-6 text-sm">
                    <a href="#signout" class="w-12 h-12 gap-2 md:w-auto justify-center transition-colors flex items-center text-gray-700 hover:text-gray-900 group font-semibold">
                        <x-icon.logout class="transition-colors w-5 text-gray-400 group-hover:text-gray-600" />
                        <span class="hidden md:inline">Sign out</span>
                    </a>

                    <a href="#profile" class="flex items-center justify-center h-12 w-12 p-2 rounded-full">
                        <x-avatar />
                        <span class="sr-only">
                            Settings
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div>
            <div class="lg:flex max-w-6xl mx-2 md:mx-auto py-8">
                <x-sidebar
                    class="lg:w-52"
                    :navigation="$sidebar"
                />

                <main role="main" class="flex-1 md:px-8">
                    @yield('content')
                </main>
            </div>
        </div>
        
        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
