<?php

use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreNotificationSettings extends Migration
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
                    'name' => 'enable_notification',
                    'type' => 'notification',
                    'value' => 'no',
                    'title' => 'Enable Notifications',
                    'desc' => 'Enable Notifications',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'notification_provider',
                    'type' => 'notification',
                    'value' => '',
                    'title' => 'Notification Provider',
                    'desc' => 'Notification Provider Name',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'notification_provider_settings',
                    'type' => 'notification',
                    'value' => '',
                    'title' => 'Notification Settings',
                    'desc' => 'Notification Provider Settings',
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
        Settings::whereIn('name', ['enable_notification', 'notification_provider_settings'])->where('type', 'notification')->delete();
    }
}
