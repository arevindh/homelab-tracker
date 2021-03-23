<div class="py-6">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>

    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded">
            <nav class="flex flex-col sm:flex-row">
                <button wire:click="selectPage('general')" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
                    General
                </button>
                <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none hover:outline-black">
                    Graphs
                </button>
                <button wire:click="selectPage('notifications')" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Notifications
                </button>
                <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Healthchecks.io
                </button>
                <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Reset
                </button>
                <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Backup/Restore
                </button>
            </nav>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-5">

        </div>

        @if ($page == "general")
            <livewire:settings.general />
        @elseif ($page == "notifications")
            <livewire:settings.notifications />
        @endif

    </div>

</div>