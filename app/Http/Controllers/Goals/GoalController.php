<?php

namespace App\Http\Controllers\Goals;

use Illuminate\Http\Request;
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

    public function store(Request $request): View
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $goal = $request->user()
            ->goals()
            ->create($request->all());

        return view('goals.show')
            ->with('goal', $goal);
    }

    public function edit(Request $request, Goal $goal): View
    {
        return view('goals.edit')
            ->with('goal', $goal);
    }
}
