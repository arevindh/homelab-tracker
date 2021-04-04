<div class="py-6">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <livewire:settings.nav-bar :page="$page" />
        <div class="mt-10 sm:mt-0">
            <div class="mt-5 md:mt-0 md:col-span-5">
                <form wire:submit.prevent="submit">
                    <div class="shadow overflow-hidden ">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">App Name
                                        (Set a custom name for you application)</label>
                                    <input type="text" wire:model="site_name" name="app_name" id="app_name"
                                        autocomplete="app_name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                        <x-jet-input-error for="site_name" class="mt-2" />
                                </div>
                                <div class="col-span-6 sm:col-span-6">

                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input wire:model="schedule_enabled" type="checkbox" name="schedule_enable"
                                            id="schedule_enable"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label for="toggle"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                    <label for="toggle" class="text-gray-700 text-sm font-medium ">Enable Schedule (Enable or Diasble the schedule worker)</label>
                                    <x-jet-input-error for="schedule_enabled" class="mt-2" />
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="schedule" class="block text-sm font-medium text-gray-700 ">Schedule
                                        (Sets the
                                        schedule for the speedtests to run using the CRON format)</label>
                                    <input type="text" wire:model="schedule" name="schedule" id="schedule"
                                        autocomplete="family-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        <x-jet-input-error for="schedule" class="mt-2" />
                                </div>

                                <div class="col-span-12 sm:col-span-12">
                                    <label for="server" class="block text-sm font-medium text-gray-700">Server ids coma
                                        separated </label>
                                    <input type="text" name="server" id="server" wire:model="server"
                                        autocomplete="server"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <x-jet-input-error for="server" class="mt-2" />


                                </div>
                                <div class="col-span-12 sm:col-span-12">

                                    <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        wire:click="suggest">Toggle Suggesions</a>
                                    <div class="px-2"> 
                                        
                                    @if ($suggested)
                                    <table class="min-w-max divide-y divide-x divide-gray-200">
                                        <thead class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <th class="w-1/6">Id</th>
                                            <th >Provider</th>
                                        </tr>
                                        </thead>
                                        
                                        <tbody  class="bg-white divide-y divide-gray-200">
                                            @foreach ($suggested as $suggested_item)
                                            <tr> 
                                                <td>
                                                    {{$suggested_item['id']}} 
                                                </td>
                                                <td>
                                                    {{ $suggested_item['sponsor'] }}
                                                {{ !empty($suggested_item['force_ping_select']) ? '(Suggested)' : '' }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                       
                                    
                                    @endif
                                </div>
                                </div>
                            </div>

                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>

<style>
    .toggle-checkbox:checked {
        @apply: right-0 border-green-400;
        right: 0;
        border-color: #68D391;
    }

    .toggle-checkbox:checked+.toggle-label {
        @apply: bg-green-400;
        background-color: #68D391;
    }

</style>
