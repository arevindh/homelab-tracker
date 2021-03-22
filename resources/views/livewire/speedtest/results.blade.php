<div class="py-8">
    <!-- dark:bg-gray-800 -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Speedtest History') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

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
    </div>

        <script>
            $(document).ready(function() {
                var results = $('#speedtestresults').DataTable({
                    "ajax": "/ajax/speedtest/history",
                    "processing": true,
                    "serverSide": true,
                    "searching": false,
                    "order": [
                        [9, 'desc']
                    ],
                    "columns": [{
                            "data": "download_bandwidth",
                            "render": function(data, type, row, meta) {
                                if (data !=null) {
                                    return (parseInt(data) / 125000).toFixed(2) + ' Mbps';
                                }
                                return row.status;
                            }
                        },
                        {
                            "data": "upload_bandwidth",
                            "render": function(data, type, row, meta) {
                                if (data !=null) {
                                    return (parseInt(data) / 125000).toFixed(2) + ' Mbps';
                                }
                                return row.status;
                            }
                        },
                        {
                            "data": "ping_jitter"
                        },
                        {
                            "data": "ping_latency"
                        },
                        {
                            "data": "server_name",
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
                        },
                        {
                            "data": "created_at",
                            "visible": false
                        },
                    ]
                });
                // reload every 15 seconds
                setInterval(function() {
                    results.ajax.reload();
                }, 15000);
            });
        </script>
    </div>

</div>