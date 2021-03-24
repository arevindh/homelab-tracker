<div class="mt-10 sm:mt-0">
    <div class="mt-5 md:mt-0 md:col-span-5">
        <form action="#" method="POST">
            <div class="shadow overflow-hidden ">
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