<?php

namespace App\Providers;

use App\Listeners\SendGoalCreatedNotification;
use Livewire\Component;
use App\Events\GoalCreated;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Component::macro('notify', function ($message, $type = 'success'): void {
            $this->dispatch('notify', ['message' => $message, 'type' => $type]);
        });

        Event::listen(
            GoalCreated::class,
            SendGoalCreatedNotification::class,
        );
    }
}
