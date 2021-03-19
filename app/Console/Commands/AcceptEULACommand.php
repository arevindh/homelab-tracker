<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AcceptEULACommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'speedtest:eula';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Accept the Ookla EULA and GDPR agreements.';

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
        shell_exec(storage_path() . '/speedtest-cli/cli/speedtest --accept-license --accept-gdpr');
    }
}
