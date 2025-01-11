<?php

namespace App\Livewire;

use App\Models\Goal;
use Livewire\Component;

class CreateGoal extends Component
{
    public $title;
    public $description;
    public $status = 'pending';
    public $priority = 'medium';
    public $due_date;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'status' => 'required|string',
        'priority' => 'required|string',
        'due_date' => 'required|date',
    ];

    public function submit()
    {
        $this->validate();

        Goal::create([
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'user_id' => auth()->id(),
        ]);

        $this->reset();

        return redirect()->route('goals.index')
            ->with('success', 'Goal created successfully.');
    }

    public function render()
    {
        return view('livewire.create-goal');
    }
}
