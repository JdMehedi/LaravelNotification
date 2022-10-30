<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\EmailNotifications;
use Illuminate\Console\Command;

class EmailNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:active-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::all();
        dd($user);
        foreach($user as $us){
            $us->notify(new EmailNotifications('Mehhedi', 'Taslim'));
        }
        return 0;
    }
}
