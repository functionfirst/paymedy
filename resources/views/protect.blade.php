@extends('layouts.app')

@section('title', 'Case Details #668919 - Protect')

@section('content')
    <x-notification
        type="info"
        class="mb-6"
    >
        Based on the evidence Charger recommends that you continue to
        <button class="flex border shadow-md border-white text-white rounded-full px-4 py-2 hover:border-blue-100 hover:text-blue-100">
            <x-icon.shield-exclamation class="w-5 mr-2" />
            Defend this dispute
        </button>
    </x-notification>

    <x-case.details />

    <x-case.actions />

    <x-case.history.list />
@endsection
