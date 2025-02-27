<?php

namespace App\Livewire;

use Livewire\Component;

class ToastNotification extends Component
{
    public string $message = "";
    public string $type = "";

    protected $listeners = [
        'notify' => 'showNotification',
    ];

    public function showNotification($type, $message)
    {
        $this->type = $type;
        $this->message = $message;

        $this->dispatch('show-toast');
    }

    public function render()
    {
        return view('livewire.toast-notification');
    }
}
