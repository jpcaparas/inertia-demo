<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GreetController extends Controller
{
    public function __invoke(string $name)
    {
        return inertia('Greet', [
            'name' => $name
        ]);
    }
}
