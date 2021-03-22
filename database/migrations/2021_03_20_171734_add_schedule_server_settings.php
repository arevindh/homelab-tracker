<?php

use App\Models\Settings;
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
                    'value' => '0 * * * *',
                    'title' => 'Schedule',
                    'desc' => 'Enter crontab'
                ],
                [
                    'name' => 'server',
                    'value' => '',
                    'title' => 'Speedtest.net Server',
                    'desc' => 'Select Speedtest.net server'
                ],
                [
                    'name' => 'schedule_enabled',
                    'value' => 'yes',
                    'title' => 'Enable Speedtest',
                    'desc' => 'Enable Speedtest'
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
        Settings::whereIn('name', ['schedule', 'server','schedule_enabled'])->delete();
    }
}
