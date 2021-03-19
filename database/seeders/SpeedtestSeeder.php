<?php

namespace Database\Seeders;

use App\Models\Speedtest;
use Carbon\Carbon;
use Database\Factories\SpeedtestFactory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SpeedtestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('speedtests')->truncate();

        Speedtest::factory()
        ->count(200)
        ->create();
    }
}
