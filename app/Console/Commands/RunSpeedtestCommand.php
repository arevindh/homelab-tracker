<?php

namespace App\Console\Commands;

use App\Models\Speedtest;
use Illuminate\Console\Command;

class RunSpeedtestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'speedtest:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run speedtest command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Running new speedtest from commandline");
        $speedtest = new Speedtest();
        $speedtest->status = "inprogress";
        $speedtest->save();
        try {
            $output = exec(storage_path() . '/speedtest-cli/cli/speedtest -f json  --accept-license --accept-gdpr');

            $decoded_op = json_decode($output);

            $speedtest->ping_jitter = $decoded_op->ping->jitter;
            $speedtest->ping_latency = $decoded_op->ping->latency;
            $speedtest->download_bandwidth = $decoded_op->download->bandwidth;
            $speedtest->download_bytes = $decoded_op->download->bytes;
            $speedtest->download_elapsed = $decoded_op->download->elapsed;
            $speedtest->upload_bandwidth = $decoded_op->upload->bandwidth;
            $speedtest->upload_bytes = $decoded_op->upload->bytes;
            $speedtest->upload_elapsed = $decoded_op->upload->elapsed;
            $speedtest->isp = $decoded_op->isp;
            $speedtest->interface_external_ip = $decoded_op->interface->externalIp;
            $speedtest->interface_internal_ip = $decoded_op->interface->internalIp;
            $speedtest->interface_name = $decoded_op->interface->name;
            $speedtest->server_name = $decoded_op->server->name;
            $speedtest->server_location = $decoded_op->server->location;
            $speedtest->server_host = $decoded_op->server->host . ":" . $decoded_op->server->port;
            $speedtest->result_url = $decoded_op->result->url;
            $speedtest->timestamp = $decoded_op->timestamp;
            $speedtest->status = "success";
            $speedtest->save();
            $this->info("Speedtest successful");
        } catch (\Throwable $th) {
            $speedtest->status = "failed";
            $speedtest->save();
            $this->info("Speedtest failed");
            throw $th;
        }
    }
}
