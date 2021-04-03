<?php

namespace App\Notifications;

use App\Models\Settings;
use App\Models\Speedtest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramMessage;

class SpeedtestNotification extends Notification
{
    use Queueable;

    public $result_image;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Speedtest $results)
    {
        $this->result_image = $results->result_url;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }


    public function toTelegram($notifiable)
    {
        return TelegramFile::create()
            ->token(Settings::getValue('telegram', 'telgram_bot_token'))
            ->content("HomelabTracker : Speedtest Completed [View](" . $this->result_image . ")")
            ->file($this->result_image . '.png', 'photo');
    }
}
