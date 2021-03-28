<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use App\Models\Settings;

class Notifications extends Component
{

    public $page;
    public function mount()
    {
        // $this->site_name = Settings::getConfig('core', 'site_name');
        // $this->server = Settings::getConfig('speedtest', 'server');
        // $this->schedule = Settings::getConfig('speedtest', 'schedule');
        // $this->schedule_enabled = Settings::getConfig('speedtest', 'schedule_enabled');
        $this->page = "notifications";
    }

    public function render()
    {
        return view('livewire.settings.notifications');
    }
}
