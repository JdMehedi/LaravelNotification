<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\EmailNotifications;
use Illuminate\Support\Facades\Notification;

class NotificationsController extends Controller
{
    public function send(){
        $user = User::all();
        // dd($user);
        foreach($user as $us){
            // Notification::send($us, new EmailNotifications('Mehhedi', 'Taslim'));
            $us->notify(new EmailNotifications('Mehhedi', 'Taslim'));
        }

        return redirect()->back();
    }
}
