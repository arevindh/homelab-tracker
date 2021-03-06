<?php

use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddScheduleServerSettings extends Migration
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
                    'name' => 'schedule',
                    'type' => 'speedtest',
                    'value' => '0 * * * *',
                    'title' => 'Schedule',
                    'desc' => 'Enter crontab',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'server',
                    'type' => 'speedtest',
                    'value' => '',
                    'title' => 'Speedtest.net Server',
                    'desc' => 'Select Speedtest.net server',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'schedule_enabled',
                    'type' => 'speedtest',
                    'value' => 'yes',
                    'title' => 'Enable Speedtest',
                    'desc' => 'Enable Speedtest',
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
        Settings::whereIn('name', ['schedule', 'server', 'schedule_enabled'])->where('type','speedetest')->delete();
    }
}
