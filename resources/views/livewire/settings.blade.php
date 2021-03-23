<div class="py-6">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>

    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded">
            <nav class="flex flex-col sm:flex-row">
                <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
                    General
                </button>
                <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Graphs
                </button>
                <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
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

    {{-- General section form area --}}
        <div class="mt-10 sm:mt-0">
            <div class="mt-5 md:mt-0 md:col-span-5">
                <form action="#" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-12 sm:col-span-12">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">App Name (Set a custom name for you application)</label>
                                    <input type="text" name="app_name" id="app_name" autocomplete="app_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="schedule_enable" class="block text-sm font-medium text-gray-700">Enable Schedule (Enable or Diasble the schedule worker)</label>
                                    <input type="checkbox" name="schedule_enable" id="schedule_enable" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="schedule" class="block text-sm font-medium text-gray-700 ">Schedule</label>
                                    <input type="text" name="schedule" id="schedule" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-12 sm:col-span-12">
                                    <label for="server" class="block text-sm font-medium text-gray-700">Server (Sets the schedule for the speedtests to run using the CRON format)</label>
                                    <input type="text" name="server" id="server" autocomplete="server" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-12 sm:col-span-6">
                                    <label for="schedule_enable" class="block text-sm font-medium text-gray-700">Show Average (If enabled, the average value for speedtest will be shown in the widget)</label>
                                    <input type="checkbox" name="schedule_enable" id="schedule_enable" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <label for="schedule_enable" class="block text-sm font-medium text-gray-700">Show Max (If enabled, the maximum value for speedtest will be shown in the widget)</label>
                                    <input type="checkbox" name="schedule_enable" id="schedule_enable" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <label for="schedule_enable" class="block text-sm font-medium text-gray-700">Show Min (If enabled, the minimum value for speedtest will be shown in the widget)</label>
                                    <input type="checkbox" name="schedule_enable" id="schedule_enable" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                               
                            </div>



                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    {{-- General section form area end --}}

    {{-- Notifications section from area --}}
    <div class="mt-10 sm:mt-0">
        <div class="mt-5 md:mt-0 md:col-span-5">
            <form action="#" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            
                            <div class="col-span-12 sm:col-span-12">
                                <label for="speedtest_notification" class="block text-sm font-medium text-gray-700">Speedtest Notification (Enable notification for every speedtest that runs)</label>
                                <input type="checkbox" name="speedtest_notification" id="speedtest_notification" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-12 sm:col-span-12">
                                <label for="overview_notification" class="block text-sm font-medium text-gray-700">Speedtest Overview Notification (Enable a daily notification with average values for the last 24 hours)</label>
                                <input type="checkbox" name="overview_notification" id="overview_notification" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-12 sm:col-span-12">
                                <label for="overview_time" class="block text-sm font-medium text-gray-700 ">Speedtest Overview Time (The hour (24-hour format )that the daily average notification will be sent) </label>
                                <input type="number" name="overview_time" id="overview_time" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-12 sm:col-span-12">
                                <label for="threshold_alert_percent" class="block text-sm font-medium text-gray-700">Threshold Alert Percentage (When any value of a speedtest is x percent lower than the average, a notification will be sent)</label>
                                <input type="text" name="threshold_alert_percent" id="threshold_alert_percent" autocomplete="server" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-12 sm:col-span-12">
                                <label for="threshold_alert_absolute_notification" class="block text-sm font-medium text-gray-700 ">Threshold Alert Absolute Notification  (Enable/Disable absolute threshold notifications) </label>
                                <input type="checkbox" name="threshold_alert_absolute_notification" id="threshold_alert_absolute_notification" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block  shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-12 sm:col-span-12">
                                <label for="threshold_alert_absolute_download" class="block text-sm font-medium text-gray-700 ">Threshold Alert Absolute Download  (When the download is lower than this value, a notification will be sent. Leave blank to disable) </label>
                                <input type="number" name="threshold_alert_absolute_download" id="threshold_alert_absolute_download" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-12 sm:col-span-12">
                                <label for="threshold_alert_absolute_upload" class="block text-sm font-medium text-gray-700 ">Threshold Alert Absolute Upload  (When the upload is lower than this value, a notification will be sent. Leave blank to disable) </label>
                                <input type="number" name="threshold_alert_absolute_upload" id="threshold_alert_absolute_upload" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-12 sm:col-span-12">
                                <label for="threshold_alert_absolute_ping" class="block text-sm font-medium text-gray-700 ">Threshold Alert Absolute Ping  (When the ping is higher than this value, a notification will be sent. Leave blank to disable) </label>
                                <input type="number" name="threshold_alert_absolute_ping" id="threshold_alert_absolute_ping" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

{{-- Notifications section from area  end--}}



    </div>

</div>