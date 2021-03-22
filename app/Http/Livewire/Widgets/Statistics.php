<?php

namespace App\Http\Livewire\Widgets;

use App\Jobs\SpeedtestJob;
use App\Models\Speedtest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Statistics extends Component
{
    public function render()
    {

        $stats = Cache::remember('speedtests', 60, function () {
            return Speedtest::where('status', 'success')
                ->select('id', 'name', DB::raw('round(AVG(ping_latency),0) as avg_ping_latency, round(AVG(ping_jitter),0) as avg_ping_jitter , round(AVG(download_bandwidth),0) as avg_download_bandwidth , round(AVG(upload_bandwidth),0) as avg_upload_bandwidth, round(max(ping_latency),0) as max_ping_latency, round(max(ping_jitter),0) as max_ping_jitter , round(max(download_bandwidth),0) as max_download_bandwidth , round(max(upload_bandwidth),0) as max_upload_bandwidth, round(min(ping_latency),0) as min_ping_latency, round(min(ping_jitter),0) as min_ping_jitter , round(min(download_bandwidth),0) as min_download_bandwidth , round(min(upload_bandwidth),0) as min_upload_bandwidth'))
                ->first();
        });

        $latest = Speedtest::where('status', 'success')->select('id', 'timestamp', 'isp', 'ping_jitter', 'ping_latency', 'download_bandwidth', 'upload_bandwidth')->latest()->first();


        return view('livewire.widgets.statistics', ['stats' => $stats, 'latest' => $latest]);
    }

    public function testSpeed()
    {
        SpeedtestJob::dispatch();
        // $this->dispatchBrowserEvent('reloadGraph');
    }
}
