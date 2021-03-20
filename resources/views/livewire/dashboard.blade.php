<div class="py-12 ">
    <!-- dark:bg-gray-800 -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">

            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-400">
                    <div class="flex items-center">
                        <div class="icon w-14  rounded-full mr-3">
                            <span class="material-icons" style="color: #39B29D;
    font-size: 58px;">
                               cloud_download
                                </span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-lg">{{convertToReadableSize($stats->avg_download_bandwidth)}}</div>
                            <div class="text-sm">Max {{convertToReadableSize($stats->max_download_bandwidth)}} </div>
                            <div class="text-sm">Min {{convertToReadableSize($stats->min_download_bandwidth)}}</div>
                            <div class="text-sm text-gray-400">Download Speed</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
                    <div class="flex items-center">
                        <div class="icon w-14   text-white rounded-full mr-3">
                            <span class="material-icons" style="color: #ff932f;
                            font-size: 58px;">
                               cloud_upload
                                </span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-lg">{{convertToReadableSize($stats->avg_upload_bandwidth)}}</div>
                            <div class="text-sm">Max {{convertToReadableSize($stats->max_upload_bandwidth)}} </div> 
                            <div class="text-sm">Min {{convertToReadableSize($stats->max_upload_bandwidth)}}</div>
                            <div class="text-sm text-gray-400">Upload Speed</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-yellow-400">
                    <div class="flex items-center">
                        <div class="icon w-14   text-white rounded-full mr-3">
                            <span class="material-icons" style="color: red;
                            font-size: 58px;">
                               network_check
                                </span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-lg">{{$stats->avg_ping_latency}} ms</div>
                            <div class="text-sm">Max {{$stats->max_ping_latency}} ms</div> 
                            <div class="text-sm">Min {{$stats->min_ping_latency}} ms</div>
                            <div class="text-sm text-gray-400">Latency</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-red-400">
                    <div class="flex items-center">
                        <div class="icon w-14   text-white rounded-full mr-3">
                            <span class="material-icons" style="color: aqua;
                            font-size: 58px;">
                               cable
                                </span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-lg">{{$stats->avg_ping_jitter}} </div>
                            <div class="text-sm">Max {{$stats->max_ping_jitter}} ms</div> 
                            <div class="text-sm">Min {{$stats->min_ping_jitter}} ms</div>
                            <div class="text-sm text-gray-400">Jitter</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 py-5 bg-white space-y-6 sm:p-6 ">
            <!-- dark:bg-gray-800 -->
            <div id="chart" width="400" height="400"></div>
        </div>

        <script>
            var latest_data = {
                upload: [],
                download: [],
                isp: [],
                ping_latency: [],
                ping_jitter: [],
                label: [],
            };

            function loadLatestSpeedtest() {
                $.ajax({
                    url: "{{route('chart.latest')}}",
                    dataType: "json"
                }).done(function(results) {
                    results.forEach(function(packet) {
                        latest_data.label.push(moment.utc(packet.timestamp).valueOf());
                        latest_data.upload.push(parseFloat((packet.upload_bandwidth) / 125).toFixed(2));
                        latest_data.download.push((parseFloat(packet.download_bandwidth) / 125).toFixed(2));
                        latest_data.isp.push(parseFloat(packet.isp));
                        latest_data.ping_latency.push(parseFloat(packet.ping_latency));
                        latest_data.ping_jitter.push(parseFloat(packet.ping_jitter));
                    });

                    var options = {
                        chart: {
                            type: 'line',
                            height: '300px',
                            zoom: {
                                autoScaleYaxis: true
                            },
                            stacked: false,
                            // background: '#fff'
                        },
                        series: [{
                                name: 'Download',
                                data: latest_data.download
                            }, {
                                name: 'Upload',
                                data: latest_data.upload
                            },
                            {
                                name: 'Latency',
                                data: latest_data.ping_latency
                            },
                            {
                                name: 'Jitter',
                                data: latest_data.ping_jitter
                            }
                        ],
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            width: 1,
                            curve: 'smooth'
                        },
                        xaxis: {
                            type: 'datetime',
                            categories: latest_data.label,
                            tickAmount: 6,
                        },
                        tooltip: {
                            x: {
                                format: 'dd MMM yyyy hh:mm'
                            }
                        },
                        yaxis: {
                            title: {
                                text: 'Timestamp'
                            },
                        },
                        theme: {
                            // mode: 'dark',
                            palette: "palette2"
                        },
                        markers: {
                            size: 0
                        },
                    }

                    var chart = new ApexCharts(document.querySelector('#chart'), options)
                    chart.render()


                });
            }

            loadLatestSpeedtest();
        </script>


    </div>

</div>