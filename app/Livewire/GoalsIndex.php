<?php

namespace App\Livewire;

use App\Models\Goal;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class GoalsIndex extends Component
{
    public function render()
    {
        $goals = Auth::user()
            ->goals()
            ->orderBy("created_at", "desc")
            ->get();

        return view('livewire.goals-index')
            ->with('goals', $goals);
    }

    public function delete(Goal $goal): void
    {
        $goal->delete();

        session()->flash('success', 'Goal deleted successfully.');
    }
}
