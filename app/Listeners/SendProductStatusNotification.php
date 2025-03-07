<?php
namespace App\Listeners;

use App\Events\ProductStatusChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendProductStatusNotification implements ShouldQueue
{
    public function handle(ProductStatusChanged $event)
    {

        Mail::raw("وضعیت محصول {$event->product->name} به {$event->status} تغییر کرد",function ($message){
            $message->to("yacn1214@gmail.com")->subject("تغییر وضعیت محصول");
        });
    }
}