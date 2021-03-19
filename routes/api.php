<?php

use App\Models\Speedtest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test', function(){

    // $interfaces_list = shell_exec("ip -o a show | cut -d ' ' -f 2");

    // return $interfaces = array_unique(array_filter(explode(PHP_EOL,$interfaces_list)));

    return Speedtest::get();
});