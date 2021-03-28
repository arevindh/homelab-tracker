<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use PharData;

class InstallCLICommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'speedtest:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install speedtest cli';

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
        $lists = ['i386', 'x86_64', 'arm32', 'arm32hf', 'arm64'];

        $darch = php_uname('m');

        $arch = 'x86_64';

        switch ($darch) {
            case 'x86_64':
                $arch = 'x86_64';
                break;
            case 'armv7l':
                $arch = 'armhf';
                break;
            case 'aarch64':
                $arch = 'aarch64';
                break;
            default:
                $arch = 'x86_64';
                break;
        }

        $this->info("Speedtest CLI is maintained by the Ookla team (https://www.speedtest.net/apps/cli) ");

        $dl_url = "https://bintray.com/ookla/download/download_file?file_path=ookla-speedtest-1.0.0-$arch-linux.tgz";
        $contents = file_get_contents($dl_url);

        $this->info("Downloading File " . $dl_url);

        $file = storage_path() . '/speedtest-cli/temp/speedtest.tar.gz';
        file_put_contents($file, $contents);

        $this->info("Extracting speedtest.tar.gz");

        $phar = new PharData($file);
        $phar->extractTo(storage_path() . '/speedtest-cli/cli', 'speedtest', true);

        $this->info("Clearning up...");
        unlink($file);

        $this->info("Installed");
    }
}
