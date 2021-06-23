<section class="bg-white rounded-full p-6 shadow-lg flex items-center justify-between m-6 -mt-12">
    <header>
        <h2 class="font-bold text-lg text-gray-700 ml-4">
            What would you like to do?
        </h2>
    </header>

    <div class="flex text-sm">
        <x-link.secondary
            href="#preview-report"
            class="rounded-l-full"
        >
            <x-icon.eye class="w-5 mr-2" />
            Preview Report
        </x-link.secondary>

        <x-link.secondary
            href="#accept"
            class="-mx-px"
        >
            <x-icon.receipt-refund class="w-5 mr-2" />
            Accept
        </x-link.secondary>

        <x-link.secondary
            href="#defend"
            class="rounded-r-full"
        >
            <x-icon.shield-exclamation class="w-5 mr-2" />
            Defend
        </x-link.secondary>
    </div>
</section>
