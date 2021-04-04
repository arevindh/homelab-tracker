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
    public $notification_threshold;
    public $enable_threshold_notification;
    public $upload_bandwidth;
    public $download_bandwidth;

    protected $rules = [
        'single_notification' => 'required|bool',
        'enable_threshold_notification' => 'required|bool',
        'telgram_bot_token' => 'string',
        'telgram_chat_id' => 'integer',
        'notification_threshold' => 'nullable|integer|between:1,100',
        'upload_bandwidth' => 'nullable|integer',
        'download_bandwidth' => 'nullable|integer',
    ];

    public function mount()
    {
        $this->page = "notifications";
        $this->single_notification = (Settings::getValue('speedtest', 'single_notification') == 'yes') ? true : false;
        $this->enable_threshold_notification = (Settings::getValue('speedtest', 'enable_threshold_notification')  == 'yes') ? true : false;

        $this->telgram_bot_token = Settings::getValue('telegram', 'telgram_bot_token');
        $this->telgram_chat_id =   Settings::getValue('telegram', 'telgram_chat_id');
        $this->notification_threshold =   Settings::getValue('speedtest', 'notification_threshold');

        $this->upload_bandwidth =   Settings::getValue('speedtest', 'upload_bandwidth');
        $this->download_bandwidth =   Settings::getValue('speedtest', 'download_bandwidth');
    }

    public function render()
    {
        return view('livewire.settings.notifications');
    }

    public function submit()
    {
        if ($this->validate()) {
            Settings::setConfig('speedtest', 'single_notification', $this->single_notification ? 'yes' : 'no');
            Settings::setConfig('speedtest', 'enable_threshold_notification', $this->enable_threshold_notification ? 'yes' : 'no');

            Settings::setConfig('telegram', 'telgram_bot_token', $this->telgram_bot_token);
            Settings::setConfig('telegram', 'telgram_chat_id', $this->telgram_chat_id);

            Settings::setConfig('speedtest', 'notification_threshold', $this->notification_threshold);
            Settings::setConfig('speedtest', 'upload_bandwidth', $this->upload_bandwidth);
            Settings::setConfig('speedtest', 'download_bandwidth', $this->download_bandwidth);

            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'General Settings saved.']
            );
        } else {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error',  'message' => 'Invalid Settings.']
            );
        }
    }
}
