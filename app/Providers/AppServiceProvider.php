<?php

namespace App\Providers;

use Livewire\Component;
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
    }
}
