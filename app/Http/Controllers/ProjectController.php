<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
$request->validate([
            'title' => 'required|min:3',
            'description' => 'nullable',
        ]);

        Project::create([
            'user_id' => Auth::id(), 
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/dashboard')->with('success', 'Project created successfully!');    }
}