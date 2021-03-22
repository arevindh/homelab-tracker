<div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4" wire:poll>

    <div class="w-full lg:w-1/4">
        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-green-400">
            <div class="flex items-center">
                <div class="icon w-14  rounded-full mr-3">
                    <span class="material-icons" style="color: #39B29D; font-size: 58px;">
                        cloud_download
                    </span>
                </div>
                <div class="flex flex-col justify-center">
                    <div class="text-lg font-black">{{convertToReadableSize($latest->download_bandwidth)}}</div>
                    <div class="text-xs">Max : {{convertToReadableSize($stats->max_download_bandwidth)}} </div>
                    <div class="text-xs">Min : {{convertToReadableSize($stats->min_download_bandwidth)}}</div>
                    <div class="text-xs">Avg : {{convertToReadableSize($stats->avg_download_bandwidth)}}</div>
                    <div class="text-sm text-gray-400">Download Speed</div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-1/4">
        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-yellow-400">
            <div class="flex items-center">
                <div class="icon w-14   text-white rounded-full mr-3">
                    <span class="material-icons" style="color: #ff932f;
                font-size: 58px;">
                        cloud_upload
                    </span>
                </div>
                <div class="flex flex-col justify-center">
                    <div class="text-lg font-black">{{convertToReadableSize($latest->upload_bandwidth)}}</div>
                    <div class="text-xs">Max {{convertToReadableSize($stats->max_upload_bandwidth)}} </div>
                    <div class="text-xs">Min {{convertToReadableSize($stats->min_upload_bandwidth)}}</div>
                    <div class="text-xs">Avg: {{convertToReadableSize($stats->avg_upload_bandwidth)}}</div>
                    <div class="text-sm text-gray-400">Upload Speed</div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-1/4">
        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-red-400">
            <div class="flex items-center">
                <div class="icon w-14   text-white rounded-full mr-3">
                    <span class="material-icons" style="color: red;
                font-size: 58px;">
                        network_check
                    </span>
                </div>
                <div class="flex flex-col justify-center">
                    <div class="text-lg font-black">{{$latest->ping_latency}} ms</div>
                    <div class="text-xs">Max : {{$stats->max_ping_latency}} ms</div>
                    <div class="text-xs">Min : {{$stats->min_ping_latency}} ms</div>
                    <div class="text-xs">Avg : {{$stats->avg_ping_latency}} ms</div>
                    <div class="text-sm text-gray-400">Latency</div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-1/4">
        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
            <div class="flex items-center">
                <div class="icon w-14   text-white rounded-full mr-3">
                    <span class="material-icons" style="color: blue;
                font-size: 58px;">
                        cable
                    </span>
                </div>
                <div class="flex flex-col justify-center">
                    <div class="text-lg font-black">{{convertToReadableSize($latest->ping_jitter)}}</div>
                    <div class="text-sm">Max : {{$stats->max_ping_jitter}} ms</div>
                    <div class="text-xs">Min : {{$stats->min_ping_jitter}} ms</div>
                    <div class="text-xs">Avg : {{$stats->avg_ping_jitter}} </div>
                    <div class="text-sm text-gray-400">Jitter</div>
                </div>
            </div>
        </div>
    </div>
</div>