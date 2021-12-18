<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortController extends Controller
{
    public function __invoke(string $sortDirection, string $params)
    {
        $sortable = array_map('trim', explode('/', $params));

        $sortable = array_map('intval', $sortable);

        $sortable = array_values(array_unique($sortable));

        return inertia('Sort', [
            'sortDirection' => $sortDirection,
            'sortable' => $sortable
        ]);
    }
}
