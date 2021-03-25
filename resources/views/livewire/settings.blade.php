<style>
    .toggle-checkbox:checked {
  @apply: right-0 border-green-400;
  right: 0;
  border-color: #68D391;
}
.toggle-checkbox:checked + .toggle-label {
  @apply: bg-green-400;
  background-color: #68D391;
}
</style>
<div class="py-6">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>

    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-t">
            <nav class="flex flex-col sm:flex-row">
                <button wire:click="selectPage('general')" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none {{ $page =='general' ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }} ">
                    General
                </button>
                <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none hover:outline-black">
                    Graphs
                </button>
                <button wire:click="selectPage('notifications')" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none  {{ $page =='notifications' ? 'text-blue-500 border-b-2 font-medium border-blue-500' : '' }}">
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

        @if ($page == "general"  )
        <livewire:settings.general :core="$core" :speedtest="$speedtest" />
        @elseif ($page == "notifications")
        <livewire:settings.notifications />
        @elseif ($page == "advanced")
        <livewire:settings.advanced />
        @endif

    </div>
    <script type="text/javascript">
        // waiting for DOM loaded
        document.addEventListener('DOMContentLoaded', function() {
            // listen for the event
            window.livewire.on('pageChange', param => {
                // pushing on the history by passing the current url with the param appended
                history.pushState(null, null, `${document.location.pathname}?page=${param}`);
            });
        });
    </script>
</div>