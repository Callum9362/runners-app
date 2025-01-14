<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MyFamilyController extends Controller
{
    public function index(): View
    {
        dd(auth()->user()->family);
        return view("families.index")
            ->with("family", auth()->user()->family);
    }
}
