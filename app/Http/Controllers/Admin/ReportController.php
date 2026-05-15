<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resource;

class ReportController extends Controller
{
    public function index()
    {
        $resources = Resource::where('is_approved', 1)->get();

        return view('admin.report', compact('resources'));
    }
}