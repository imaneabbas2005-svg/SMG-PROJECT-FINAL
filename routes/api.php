<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Resource;

Route::get('/resources', function (Request $request) {

    $query = Resource::where('is_approved', true);

   if ($request->category) {
    $query->whereHas('category', function ($q) use ($request) {
        $q->where('name', $request->category);
    });
}

    return $query->paginate(5);
});