<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Speedtest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SpeedtestController extends Controller
{
    public function speedtestDatable()
    {
        return DataTables::eloquent(Speedtest::query())
            ->addColumn('button', function (Speedtest $user) {
                return '<a href= ' . $user->result_url . '>View</a>';
            })
            ->make(true);
    }
}
