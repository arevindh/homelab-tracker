<?php

namespace App\Http\Controllers;

use App\Models\Speedtest;
use Illuminate\Http\Request;

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
            ->get(['ping_latency', 'ping_jitter', 'download_bandwidth', 'upload_bandwidth', 'timestamp', 'isp', 'id'])->take(50);
    }
}
