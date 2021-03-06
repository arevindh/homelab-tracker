<div class="py-6">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <livewire:settings.nav-bar :page="$page" />
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

        <div class="mt-10 sm:mt-0">
            <div class="mt-5 md:mt-0 md:col-span-5">
                <form wire:submit.prevent="submit">
                    <div class="shadow overflow-hidden ">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-12 sm:col-span-12">

                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" wire:model="single_notification"
                                            name="speedtest_notification" id="speedtest_notification"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label for="toggle"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                    <label for="toggle" class="text-gray-700 text-sm font-medium ">Speedtest Notification (Enable notification for every speedtest that runs)</label>
                                    <x-jet-input-error for="single_notification" class="mt-2" />

                                </div>
                                <div class="col-span-12 sm:col-span-12">

                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" name="overview_notification" id="overview_notification"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label for="toggle"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                    <label for="toggle" class="text-gray-700 text-sm font-medium ">Speedtest Overview Notification (Enable a daily notification with average values for the last 24 hours)</label>

                                </div>

                                <div class="col-span-12 sm:col-span-12">
                                    <label for="telgram_bot_token" class="block text-sm font-medium text-gray-700 ">
                                        Telegram API Token </label>
                                    <input :type="show ? 'password' : 'text'" name="telgram_bot_token"
                                        id="telgram_bot_token" wire:model="telgram_bot_token"
                                        autocomplete="telgram_bot_token"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <x-jet-input-error for="telgram_bot_token" class="mt-2" />
                                </div>


                                <div class="col-span-12 sm:col-span-12">
                                    <label for="telgram_chat_id" class="block text-sm font-medium text-gray-700 ">
                                        Telegram Chat id </label>
                                    <input type="number" wire:model="telgram_chat_id" name="telgram_chat_id"
                                        id="telgram_chat_id" autocomplete="telgram_chat_id"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <x-jet-input-error for="telgram_chat_id" class="mt-2" />
                                </div>


                                <div class="col-span-12 sm:col-span-12">
                                    <label for="threshold_alert_percent"
                                        class="block text-sm font-medium text-gray-700">Threshold Alert Percentage (
                                        Percent below defined bandwidth notifications will sent)</label>
                                    <input wire:model="notification_threshold" type="text"
                                        name="threshold_alert_percent" id="threshold_alert_percent"
                                        autocomplete="server"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                    <x-jet-input-error for="notification_threshold" class="mt-2" />
                                </div>

                                <div class="col-span-12 sm:col-span-12">

                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" name="threshold_alert_absolute_notification"
                                            wire:model="enable_threshold_notification"
                                            id="threshold_alert_absolute_notification"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label for="toggle"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                    <label for="toggle" class="text-gray-700 text-sm font-medium ">Threshold Alert
                                        Absolute Notification (Enable/Disable threshold notifications) </label>

                                    <x-jet-input-error for="enable_threshold_notification" class="mt-2" />
                                </div>

                                <div class="col-span-12 sm:col-span-12">
                                    <label for="upload_bandwidth" class="block text-sm font-medium text-gray-700 ">
                                        Upload bandwidth</label>
                                    <input type="number" wire:model="upload_bandwidth" name="upload_bandwidth"
                                        id="upload_bandwidth" autocomplete="fupload_bandwidth"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                    <x-jet-input-error for="upload_bandwidth" class="mt-2" />
                                </div>

                                <div class="col-span-12 sm:col-span-12">
                                    <label for="download_bandwidth" class="block text-sm font-medium text-gray-700 ">
                                        Download bandwidth</label>
                                    <input type="number" wire:model="download_bandwidth" name="download_bandwidth"
                                        id="download_bandwidth" autocomplete="download_bandwidth"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                    <x-jet-input-error for="download_bandwidth" class="mt-2" />
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
