<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MyFamilyController extends Controller
{
    public function index(): View
    {
        return view("families.index")
            ->with("family", auth()->user()->family)
            ->with("members", auth()->user()->family ? auth()->user()->family->users : collect());
    }
}
