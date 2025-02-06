<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function edit(Task $task)
    {
        dd($task);
        return view('tasks.edit');
    }
}
