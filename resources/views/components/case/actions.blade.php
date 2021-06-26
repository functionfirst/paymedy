<section class="bg-white rounded-3xl p-4 md:p-6 shadow-lg lg:flex items-center justify-between m-6 -mt-12">
    <header class="mb-4 lg:mb-0">
        <h2 class="font-bold text-lg text-gray-700 ml-4">
            What would you like to do?
        </h2>
    </header>

    <div class="flex flex-col md:flex-row text-sm gap-2 md:gap-0">
        <x-link.secondary
            href="#preview-report"
            class="rounded-full md:rounded-r-none"
        >
            <x-icon.eye class="w-5 mr-2" />
            Preview Report
        </x-link.secondary>

        <x-link.secondary
            href="#accept"
            class="-mx-px rounded-full md:rounded-none"
        >
            <x-icon.receipt-refund class="w-5 mr-2" />
            Accept
        </x-link.secondary>

        <x-link.secondary
            href="#defend"
            class="rounded-full md:rounded-l-none"
        >
            <x-icon.shield-exclamation class="w-5 mr-2" />
            Defend
        </x-link.secondary>
    </div>
</section>
