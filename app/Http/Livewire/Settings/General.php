<?php

namespace App\Http\Livewire\Settings;

use App\Models\Settings;
use Livewire\Component;

class General extends Component
{
    public $enable_speedtest;
    public $schedule;
    public $server;
    public $settings;
    public $site_name;
    public $page;

    protected $rules = [
        'schedule_enabled' => 'string',
        'server' => 'string',
        'schedule' => 'string',
        'site_name' => 'string'
    ];


    public function mount()
    {
        $this->site_name = Settings::getConfig('core', 'site_name');
        $this->server = Settings::getConfig('speedtest', 'server');
        $this->schedule = Settings::getConfig('speedtest', 'schedule');
        $this->schedule_enabled = Settings::getConfig('speedtest', 'schedule_enabled');
        $this->page = "general";
    }

    public function render()
    {
        return view('livewire.settings.general');
    }

    public function save()
    {
    }
}
