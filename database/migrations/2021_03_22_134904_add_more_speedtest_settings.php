<?php

use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreSpeedtestSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Settings::insert(
            [
                [
                    'name' => 'single_notification',
                    'type' => 'speedtest',
                    'value' => 'no',
                    'title' => 'Speedtest Notification',
                    'desc' => 'Notification for each test',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'daily_status_notification',
                    'type' => 'speedtest',
                    'value' => '',
                    'title' => 'Daily Status',
                    'desc' => 'Daily status notification',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'download_bandwidth',
                    'type' => 'speedtest',
                    'value' => '',
                    'title' => 'Download bandwidth',
                    'desc' => 'Download bandwidth you are paying for',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'upload_bandwidth',
                    'type' => 'speedtest',
                    'value' => '',
                    'title' => 'Upload bandwidth',
                    'desc' => 'Upload bandwidth you are paying for',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Settings::whereIn('name', ['single_notification', 'daily_status_notification', 'download_bandwidth', 'upload_bandwidth'])->where('type', 'speedtest')->delete();
    }
}
