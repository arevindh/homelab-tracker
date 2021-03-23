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