<?php

namespace App\Console;

use App\Notifications\EmailNotifications;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
   
    protected $commands =[

        EmailNotifications::class,
    ];
     
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('email:active-users')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
