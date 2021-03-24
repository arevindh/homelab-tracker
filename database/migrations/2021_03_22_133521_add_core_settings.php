<?php

use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoreSettings extends Migration
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
                    'name' => 'enable_guest_preview',
                    'type' => 'core',
                    'value' => 'no',
                    'title' => 'Enable guest preview',
                    'desc' => 'Enable previews for guest, without more details',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'log_ip_address',
                    'type' => 'core',
                    'value' => 'yes',
                    'title' => 'Log ip address',
                    'desc' => 'Do you want to log ip address ?',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'site_name',
                    'type' => 'core',
                    'value' => 'HomeLab Tracker',
                    'title' => 'App Name',
                    'desc' => 'Custom name for this application.',
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
        Settings::whereIn('name', ['enable_guest_preview', 'log_ip_address', 'site_name'])->where('type', 'core')->delete();
    }
}
