<div class="py-12 ">
    <!-- dark:bg-gray-800 -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Speedtest History') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">


        <table id="speedtestresults" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
        <thead>
            <tr>
                <th>download_bandwidth</th>
                <th>upload_bandwidth</th>
                <th>ping_jitter</th>
                <th>ping_latency</th>
                <th>server_name</th>
                <th>server_location</th>
                <th>timestamp</th>
            </tr>
        </thead>
        </table>

        <script>
            $(document).ready(function() {
                $('#speedtestresults').DataTable({
                    "ajax": "/ajax/speedtest/history",
                    "columns": [
                        {
                            "data": "download_bandwidth"
                        },
                        {
                            "data": "upload_bandwidth"
                        },
                        {
                            "data": "ping_jitter"
                        },
                        {
                            "data": "ping_latency"
                        },
                        {
                            "data": "server_name"
                        },
                        {
                            "data": "server_location"
                        },
                        {
                            "data": "timestamp"
                        }
                    ]
                });
            });
        </script>
    </div>

</div>