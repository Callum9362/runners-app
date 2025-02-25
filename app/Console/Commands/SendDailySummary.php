<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Goal;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailySummary extends Command
{
    protected $signature = 'app:send-daily-summary';

    protected $description = 'Sends a daily summary to the user of their tasks and goals';

    public function handle(): int
    {
        $users = User::all();

        foreach ($users as $user) {
            $goals = Goal::where('user_id', $user->getKey())
                ->get()
                ->toArray();

            Mail::send('emails.daily_summary', $goals, function ($message) use ($user): void {
                $message->to($user->email)
                    ->subject('Daily Summary of Your Goals and Tasks');
            });
        }

        return Command::SUCCESS;
    }
}
