<?php

namespace App\Listeners;

use App\Events\GoalCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendGoalCreatedNotification implements ShouldQueue
{
    public function handle(GoalCreated $event): void
    {
        $goal = $event->goal;
        $user = $event->goal->user;

        Mail::raw("A new goal has been created: {$goal->title}", function ($message) use ($user): void {
            $message->to($user->email)
                    ->subject('New Goal Created');
        });
    }
}
