<?php

namespace App\Http\Controllers\Goals;

use App\Models\Goal;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class GoalController extends Controller
{
    public function index(): View
    {
        return view('goals.index');
    }

    public function create(): View
    {
        return view('goals.create');
    }

    public function edit(Goal $goal): View
    {
        return view('goals.edit', compact('goal'));
    }
}
