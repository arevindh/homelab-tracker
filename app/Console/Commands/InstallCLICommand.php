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

        $dl_url = "https://bintray.com/ookla/download/download_file?file_path=ookla-speedtest-1.0.0-$arch-linux.tgz";
        $info = pathinfo($dl_url);
        $contents = file_get_contents($dl_url);
        $file = storage_path() . '/speedtest-cli/temp/speedtest.tar.gz';
        file_put_contents($file, $contents);

        echo $file;

        $phar = new PharData($file);
        $phar->extractTo(storage_path() . '/speedtest-cli/cli','speedtest');

        unlink($file);

        // exec('tar –xvzf ' . $file . ' -C ' . storage_path() . '/speedtest/bin');
    }
}
