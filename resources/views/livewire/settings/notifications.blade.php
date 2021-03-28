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
                <form action="#" method="POST">
                    <div class="shadow overflow-hidden ">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-12 sm:col-span-12">

                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" name="speedtest_notification" id="speedtest_notification"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label for="toggle"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                    <label for="toggle" class="text-gray-700 text-sm font-medium ">Speedtest
                                        Notification (Enable notification for every speedtest that runs)</label>

                                </div>
                                <div class="col-span-12 sm:col-span-12">

                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" name="overview_notification" id="overview_notification"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label for="toggle"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                    <label for="toggle" class="text-gray-700 text-sm font-medium ">Speedtest Overview
                                        Notification (Enable a daily notification with average values for the last 24
                                        hours)</label>

                                </div>



                                <div class="col-span-12 sm:col-span-12">
                                    <label for="overview_time"
                                        class="block text-sm font-medium text-gray-700 ">Speedtest Overview Time (The
                                        hour (24-hour format )that the daily average notification will be sent) </label>
                                    <input type="number" name="overview_time" id="overview_time"
                                        autocomplete="family-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-12 sm:col-span-12">
                                    <label for="threshold_alert_percent"
                                        class="block text-sm font-medium text-gray-700">Threshold Alert Percentage (When
                                        any value of a speedtest is x percent lower than the average, a notification
                                        will be sent)</label>
                                    <input type="text" name="threshold_alert_percent" id="threshold_alert_percent"
                                        autocomplete="server"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-12 sm:col-span-12">

                                    <div
                                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                        <input type="checkbox" name="threshold_alert_absolute_notification"
                                            id="threshold_alert_absolute_notification"
                                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                        <label for="toggle"
                                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                    <label for="toggle" class="text-gray-700 text-sm font-medium ">Threshold Alert
                                        Absolute Notification (Enable/Disable absolute threshold notifications) </label>
                                </div>


                                <div class="col-span-12 sm:col-span-12">
                                    <label for="threshold_alert_absolute_download"
                                        class="block text-sm font-medium text-gray-700 ">Threshold Alert Absolute
                                        Download (When the download is lower than this value, a notification will be
                                        sent. Leave blank to disable) </label>
                                    <input type="number" name="threshold_alert_absolute_download"
                                        id="threshold_alert_absolute_download" autocomplete="family-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="threshold_alert_absolute_upload"
                                        class="block text-sm font-medium text-gray-700 ">Threshold Alert Absolute Upload
                                        (When the upload is lower than this value, a notification will be sent. Leave
                                        blank to disable) </label>
                                    <input type="number" name="threshold_alert_absolute_upload"
                                        id="threshold_alert_absolute_upload" autocomplete="family-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
