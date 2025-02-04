<?php

namespace App\Providers;

use App\Events\GoalCreated;
use Illuminate\Support\ServiceProvider;
use App\Listeners\SendGoalCreatedNotification;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        GoalCreated::class => [
            SendGoalCreatedNotification::class,
        ],
    ];
}
