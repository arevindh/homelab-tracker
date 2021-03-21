<div class="py-12 ">
    <!-- dark:bg-gray-800 -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Speedtest History') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-4 ">


        <table id="speedtestresults" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th class="text-left">Download</th>
                    <th class="text-left">Upload</th>
                    <th class="text-left">Jitter</th>
                    <th class="text-left">Latency</th>
                    <th class="text-left">Test Server</th>
                    <th class="text-left">Server Location</th>
                    <th class="text-left">Type</th>
                    <th class="text-left">Timestamp</th>
                    <th class="text-right">Button</th>
                </tr>
            </thead>
        </table>

        <script>
            $(document).ready(function() {
                $('#speedtestresults').DataTable({
                    "ajax": "/ajax/speedtest/history",
                    "processing": true,
                    "serverSide": true,
                    "searching": false,
                    "order": [
                        [7, 'desc']
                    ],
                    "columns": [{
                            "data": "download_bandwidth",
                            "render": function(value) {
                                return (parseInt(value) / 125000).toFixed(2) + ' Mbps';
                            }
                        },
                        {
                            "data": "upload_bandwidth",
                            "render": function(value) {
                                return (parseInt(value) / 125000).toFixed(2) + ' Mbps';
                            }
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
                            "data": "type",
                            "render": function(value) {
                                if (value === "scheduled") {
                                    return "Scheduled";
                                } else {
                                    return "Manual";
                                }
                            }
                        },
                        {
                            "data": "timestamp",
                            "searchable": false,
                            "render": function(value) {
                                return moment.utc(value).local().format('YYYY-MM-DD HH:mm:ss');
                            }
                        },
                        {
                            "data": "result_url",
                            "searchable": false,
                            "sortable": false,
                            "render": function(value) {
                                return '<a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded" href="' + value + '">View</a>';
                            }
                        }
                    ]
                });
            });
        </script>
    </div>

</div>