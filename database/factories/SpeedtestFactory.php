<?php

namespace Database\Factories;

use App\Models\Speedtest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SpeedtestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Speedtest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return 
            [
                'ping_jitter' => rand(10, 100) / 10,
                'ping_latency' => rand(0, 10) / 10,
                'download_bandwidth' => rand(10, 100000) / 10,
                'download_bytes' => rand(1000, 1000000),
                'download_elapsed' => rand(1000, 1000000),
                'upload_bandwidth' => rand(10, 100000) / 10,
                'upload_bytes' => rand(1000, 1000000),
                'upload_elapsed' => rand(1000, 1000000),
                'isp' => Str::random(10),
                'interface_external_ip' => Str::random(10),
                'interface_internal_ip' => Str::random(10),
                'interface_name' => Str::random(10),
                'server_name' => Str::random(10),
                'server_location' => Str::random(10),
                'server_host' => Str::random(10),
                'result_url' => Str::random(20),
                'timestamp' => Carbon::now()->subMinutes(rand(1, 2000))->toISOString(),
                'status' => "success"
            ]
        ;
    }
}
