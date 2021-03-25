<div class="bg-white rounded-t">
    <nav class="flex flex-col sm:flex-row">
        <button wire:click="selectPage('general')"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none {{ $page == 'general' ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }} ">
            General
        </button>
        <button
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none hover:outline-black">
            Graphs
        </button>
        <button wire:click="selectPage('notifications')"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none  {{ $page == 'notifications' ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }}">
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