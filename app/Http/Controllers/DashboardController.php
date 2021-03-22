<?php

namespace App\Http\Controllers;

use App\Models\Speedtest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('api');
    }

    public function getLatest()
    {
        return Speedtest::where('status', 'success')
            ->orderBy('timestamp')
            ->select('id','timestamp', 'isp','ping_jitter','ping_latency', 'download_bandwidth' , 'upload_bandwidth')
            ->get();
    }

    public function getSingleResult($id){
        return Speedtest::find($id);
    }

    public function getStatistics()
    {
        return Speedtest::where('status', 'success')
            ->select('id', 'name', DB::raw('round(AVG(ping_latency),0) as avg_ping_latency, round(AVG(ping_jitter),0) as avg_ping_jitter , round(AVG(download_bandwidth),0) as avg_download_bandwidth , round(AVG(upload_bandwidth),0) as avg_upload_bandwidth, round(max(ping_latency),0) as max_ping_latency, round(max(ping_jitter),0) as max_ping_jitter , round(max(download_bandwidth),0) as max_download_bandwidth , round(max(upload_bandwidth),0) as max_upload_bandwidth, round(min(ping_latency),0) as min_ping_latency, round(min(ping_jitter),0) as min_ping_jitter , round(min(download_bandwidth),0) as min_download_bandwidth , round(min(upload_bandwidth),0) as min_upload_bandwidth '))
            ->first();
    }
}
