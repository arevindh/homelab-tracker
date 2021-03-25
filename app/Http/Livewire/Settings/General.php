<?php

namespace App\Http\Livewire\Settings;

use App\Models\Settings;
use Livewire\Component;

class General extends Component
{
    public $schedule_enabled;
    public $schedule;
    public $server;
    public $site_name;
    public $page;

    protected $rules = [
        'schedule_enabled' => 'required|bool',
        'server' => 'string',
        'schedule' => 'required|string',
        'site_name' => 'required|string'
    ];


    public function mount()
    {
        $this->site_name = Settings::getConfig('core', 'site_name');
        $this->server = Settings::getConfig('speedtest', 'server');
        $this->schedule = Settings::getConfig('speedtest', 'schedule');
        $this->schedule_enabled = (Settings::getConfig('speedtest', 'schedule_enabled') == 'yes') ? true : false;
        $this->page = "general";
    }

    public function render()
    {
        return view('livewire.settings.general');
    }

    public function submit()
    {
        $this->validate();

        Settings::setConfig('core', 'site_name', $this->site_name);
        Settings::setConfig('speedtest', 'schedule', $this->schedule);
        Settings::setConfig('speedtest', 'schedule_enabled', $this->schedule_enabled ? 'yes' : 'no');
        Settings::setConfig('speedtest', 'server', $this->server);

        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'General Settings saved.']
        );
    }
}
