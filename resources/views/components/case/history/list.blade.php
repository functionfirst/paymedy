<section>
    <header class="sr-only">
        <h3>
            Case History
        </h3>
    </header>

    <div class="flex items-center justify-between gap-6">
        <x-button.small>
            Merchant
            <x-icon.filter class="w-3 ml-2 text-gray-700" />
        </x-button.small>

        <div class="flex-1 border-t border-gray-300"></div>

        <div class="text-sm leading-9 font-medium text-gray-700">
            Date
        </div>

        <div class="flex-1 border-t border-gray-300"></div>

        <x-button.small>
            Consumer
            <x-icon.filter class="w-3 ml-2 text-gray-700" />
        </x-button.small>
    </div>

    <div class="flex justify-center my-4">
        <x-button.brand type="button">
            <x-icon.upload class="w-5" />
            Upload More Evidence
        </x-button.brand>
    </div>

    <section>
        <x-case.history.event date="Jan 6, 2021">
            <x-slot name="merchant">
                <x-case.history.support-call>Phone Log</x-case.history.support-call>
            </x-slot>
        </x-case.history.event>

        <x-case.history.event date="Jan 4, 2021">
            <x-slot name="merchant">
                <x-case.history.charger>Notified of Chargeback Dispute</x-case.history.charger>

                <x-case.history.zendesk>#123456</x-case.history.zendesk>

                <x-case.history.zendesk>#123456</x-case.history.zendesk>

                <x-case.history.zendesk>#123456</x-case.history.zendesk>
            </x-slot>

            <x-slot name="consumer">
                <x-case.history.hsbc>Chargeback dispute filed</x-case.history.hsbc>

                <x-case.history.scheduled-payment>£24.99</x-case.history.scheduled-payment>

                <x-case.history.web-activity>Logged In</x-case.history.web-activity>
            </x-slot>
        </x-case.history.event>

        <x-case.history.event date="Nov 4, 2020">
            <x-slot name="merchant">
                <x-case.history.mailchimp>Marketing Campaign</x-case.history.mailchimp>

                <x-case.history.intercom>Customer Support Message</x-case.history.intercom>
            </x-slot>
            <x-slot name="consumer">
                <x-case.history.paid>£24.99</x-case.history.paid>

                <x-case.history.web-activity>Logged In</x-case.history.web-activity>
            </x-slot>
        </x-case.history.event>
    </section>
<section>
