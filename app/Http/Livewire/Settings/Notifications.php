<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use App\Models\Settings;

class Notifications extends Component
{

    public $page;
    public $single_notification;
    public $telgram_bot_token;
    public $telgram_chat_id;

    protected $rules = [
        'single_notification' => 'required|bool',
        'telgram_bot_token' => 'sometimes|required|telgram_chat_id',
        'telgram_chat_id' => 'sometimes|required|telgram_bot_token',
    ];

    public function mount()
    {
        // $this->site_name = Settings::getConfig('core', 'site_name');
        // $this->server = Settings::getConfig('speedtest', 'server');
        // $this->schedule = Settings::getConfig('speedtest', 'schedule');
        // $this->schedule_enabled = Settings::getConfig('speedtest', 'schedule_enabled');
        $this->page = "notifications";
        $this->single_notification = (Settings::getValue('speedtest', 'single_notification') == 'yes') ? true : false;
        $this->telgram_bot_token = Settings::getValue('telegram', 'telgram_bot_token');
        $this->telgram_chat_id =   Settings::getValue('telegram', 'telgram_chat_id');
    }

    public function render()
    {
        return view('livewire.settings.notifications');
    }

    public function submit()
    {
        $this->validate();
        Settings::setConfig('speedtest', 'single_notification', $this->schedule_enabled ? 'yes' : 'no');
        Settings::setConfig('telegram', 'telgram_bot_token', $this->schedule);
        Settings::setConfig('telegram', 'telgram_chat_id', $this->server);

        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'General Settings saved.']
        );
    }
}
