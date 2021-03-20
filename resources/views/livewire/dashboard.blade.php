<div class="py-12 dark:bg-gray-800">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="px-4 py-5 bg-white dark:bg-gray-800 space-y-6 sm:p-6">
        <canvas id="speedtestChart" width="400" height="400"></canvas>
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
                        latest_data.label.push(moment.utc(packet.timestamp).format('lll'));
                        latest_data.upload.push(parseFloat((packet.upload_bandwidth)/125).toFixed(2));
                        latest_data.download.push((parseFloat(packet.download_bandwidth)/125).toFixed(2) );
                        latest_data.isp.push(parseFloat(packet.ping_latency));
                        latest_data.ping_latency.push(parseFloat(packet.ping_latency));
                        latest_data.ping_jitter.push(parseFloat(packet.ping_jitter));
                    });

                    var speedChartctx = document.getElementById("speedtestChart");
                    var speedChart = new Chart(speedChartctx, {
                        type: "line",
                        data: {
                            labels: latest_data.label,
                            datasets: [{
                                    label: "Download Mbps",
                                    data: latest_data.download,
                                    backgroundColor: "rgb(60, 141, 188)",
                                    fill: false,
                                    borderColor: "rgb(60, 141, 188)",
                                    borderWidth: 1,
                                    cubicInterpolationMode: "monotone",
                                    yAxisID: "y-axis-1"
                                },
                                {
                                    label: "Upload Mbps",
                                    data: latest_data.upload,
                                    backgroundColor: "rgba(255, 99, 132, 1)",
                                    fill: false,
                                    borderColor: "rgba(255,99,132,1)",
                                    borderWidth: 1,
                                    yAxisID: "y-axis-1"
                                },
                                {
                                    label: "Ping ms",
                                    data: latest_data.ping,
                                    backgroundColor: "rgba(69,237,33,1)",
                                    fill: false,
                                    borderColor: "rgba(69,237,33,1)",
                                    borderWidth: 1,
                                    borderDash: [5, 5],
                                    yAxisID: "y-axis-2"
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            legend: {
                                display: false
                            },
                            scales: {
                                yAxes: [{
                                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                                        display: true,
                                        position: "left",
                                        id: "y-axis-1",
                                        ticks: {
                                            min: 0
                                        }
                                    },
                                    {
                                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                                        display: true,
                                        position: "left",
                                        id: "y-axis-1",
                                        ticks: {
                                            min: 0
                                        }
                                    },
                                    {
                                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                                        display: true,
                                        position: "right",
                                        id: "y-axis-2",
                                        ticks: {
                                            min: 0
                                        }
                                    }
                                ],
                                xAxes: [{
                                    // type :'time',
                                    display: true,
                                    scaleLabel: {
                                        display: true
                                    },
                                    ticks: {
                                        autoSkip: true,
                                        maxTicksLimit: 8,
                                        maxRotation: 0,
                                        minRotation: 0
                                    }
                                }]
                            },
                            tooltips: {
                                enabled: true,
                                mode: "x-axis",
                                intersect: false
                            }
                        }

                    });
                });
            }

            loadLatestSpeedtest();
        </script>


    </div>

</div>