                   // var speedChartctx = document.getElementById("speedtestChart");
                    // var speedChart = new Chart(speedChartctx, {
                    //     type: "line",
                    //     data: {
                    //         labels: latest_data.label,
                    //         datasets: [{
                    //                 label: "Download Mbps",
                    //                 data: latest_data.download,
                    //                 backgroundColor: "rgb(60, 141, 188)",
                    //                 fill: false,
                    //                 borderColor: "rgb(60, 141, 188)",
                    //                 borderWidth: 1,
                    //                 cubicInterpolationMode: "monotone",
                    //                 yAxisID: "y-axis-1"
                    //             },
                    //             {
                    //                 label: "Upload Mbps",
                    //                 data: latest_data.upload,
                    //                 backgroundColor: "rgba(255, 99, 132, 1)",
                    //                 fill: false,
                    //                 borderColor: "rgba(255,99,132,1)",
                    //                 borderWidth: 1,
                    //                 yAxisID: "y-axis-1"
                    //             },
                    //             {
                    //                 label: "Ping ms",
                    //                 data: latest_data.ping_latency,
                    //                 backgroundColor: "rgba(69,237,33,1)",
                    //                 fill: false,
                    //                 borderColor: "rgba(69,237,33,1)",
                    //                 borderWidth: 1,
                    //                 yAxisID: "y-axis-2"
                    //             }
                    //         ]
                    //     },

                    //     options: {
                    //         responsive: true,
                    //         maintainAspectRatio: false,
                    //         legend: {
                    //             display: false
                    //         },
                    //         scales: {
                    //             yAxes: [


                    //                 {
                    //                     type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                    //                     display: true,
                    //                     position: "left",
                    //                     id: "y-axis-1",
                    //                     ticks: {
                    //                         min: 0,
                    //                         fontColor: ticksColor
                    //                     },
                    //                     gridLines: {
                    //                         display: true,
                    //                     },

                    //                 },
                    //                 {
                    //                     type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                    //                     display: true,
                    //                     position: "left",
                    //                     id: "y-axis-1",
                    //                     ticks: {
                    //                         min: 0,
                    //                         fontColor: ticksColor
                    //                     },
                    //                     gridLines: {
                    //                         display: true,
                    //                     },

                    //                 },
                    //                 {
                    //                     type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                    //                     display: true,
                    //                     position: "right",
                    //                     id: "y-axis-2",
                    //                     ticks: {
                    //                         min: 0,
                    //                         fontColor: ticksColor
                    //                     },
                    //                     gridLines: {
                    //                         display: false,
                    //                     },
                    //                 }
                    //             ],
                    //             xAxes: [{
                    //                 // type :'time',
                    //                 gridLines: {
                    //                     display: true,
                    //                 },
                    //                 display: true,
                    //                 scaleLabel: {
                    //                     display: true
                    //                 },

                    //                 ticks: {
                    //                     autoSkip: true,
                    //                     maxTicksLimit: 7,
                    //                     maxRotation: 0,
                    //                     minRotation: 0,
                    //                     fontColor: ticksColor
                    //                 }
                    //             }]
                    //         },
                    //         tooltips: {
                    //             enabled: true,
                    //             mode: "x-axis",
                    //             intersect: false,
                    //             fontColor: ticksColor
                    //         }
                    //     }

                    // });