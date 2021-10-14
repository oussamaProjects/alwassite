<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\UnreadMessagesInTheThread;
use Illuminate\Console\Command;

class SendUserUnreadMessages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:unreadmessages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send the user an email of their unread messages';

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
        $users = User::all();

        $users->map(function ($user) {
            $messages = 'test';
            // $messages = GetThreadMessages::new($user);

            $user->notify(new UnreadMessagesInTheThread($messages, $user));
        });
    }
}
