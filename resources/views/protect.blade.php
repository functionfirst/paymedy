@extends('layouts.app')

@section('title', '#668919 Case Details - Protect')

@section('content')
    <x-notification
        type="info"
        class="mb-6"
    >
        <div class="flex items-start lg:items-center flex-col lg:flex-row gap-2">
            <p>
                Based on the evidence Charger recommends that you continue to
            </p>

            <button class="flex items-center gap-2 border shadow-md border-white text-white rounded-3xl px-4 py-2 hover:border-blue-100 hover:text-blue-100">
                <x-icon.shield-exclamation class="w-5" />
                Defend this dispute
            </button>
        </div>
    </x-notification>

    <x-case.details />

    <x-case.actions />

    <x-case.history.list />
@endsection
