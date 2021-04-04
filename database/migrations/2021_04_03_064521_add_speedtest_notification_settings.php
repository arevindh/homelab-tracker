<?php

use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpeedtestNotificationSettings extends Migration
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
                    'name' => 'enable_threshold_notification',
                    'type' => 'speedtest',
                    'value' => 'no',
                    'title' => 'Threshold Alert',
                    'desc' => 'Threshold Alert Notification',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'notification_threshold',
                    'type' => 'speedtest',
                    'value' => '90',
                    'title' => 'Notification percentage',
                    'desc' => 'Speedtest Notification threshold in percentage',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'telgram_bot_token',
                    'type' => 'telegram',
                    'value' => '',
                    'title' => 'Telegram bot Token',
                    'desc' => 'Telegram bot Token',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'telgram_chat_id',
                    'type' => 'telegram',
                    'value' => '',
                    'title' => 'Telegram chat id',
                    'desc' => 'Telegram chat id',
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
        //
    }
}
