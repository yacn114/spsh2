<?php
namespace App\Listeners;

use App\Events\ProductStatusChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendProductStatusNotification implements ShouldQueue
{
    public function handle(ProductStatusChanged $event)
    {
        $event->product->status = $event->status;
        $event->product->save();
        dd($event->product->status);
        Mail::raw("وضعیت محصول {$event->product->name} به {$event->status} تغییر کرد",function ($message){
            $message->to("admin@gmail.com")->subject("تغییر وضعیت محصول");
        });
    }
}