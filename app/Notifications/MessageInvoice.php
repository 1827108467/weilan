<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

// php artisan make:notification MessageInvoice     by sane

class MessageInvoice extends Notification implements ShouldQueue
{
    use Queueable;
    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data=$data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // die(dd($notifiable));
        // return ['database'];
        return $notifiable->prefers_sms ? ['nexmo'] : ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        /*
        select formwork
        return (new MailMessage)->view(
            'emails.name', ['invoice' => $this->invoice]
        ); */
        return (new MailMessage)
                    ->error()       //显示错误消息
                    ->subject('badguy')     //邮件主题
                    ->greeting('您好!')       //开头
                    ->line('提示消息，点击以下按钮可跳转至官网.')    //正文
                    ->action('回到官网', url('/'))      //链接
                    ->line('谢谢您的光临!');      //尾部截止
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        // die(dd($this));
        return [
            //
            'data'=>$this->data,
        ];
    }
}
