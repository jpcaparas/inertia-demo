<?php

namespace App\Http\Controllers;

class SortController extends Controller
{
    public function __invoke(string $params)
    {
        $sortable = array_map('trim', explode('/', $params));

        return inertia('Sort', [
            'sortable' => $sortable
        ]);
    }
}
