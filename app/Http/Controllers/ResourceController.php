<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use Illuminate\Support\Facades\Auth;


class ResourceController extends Controller
{
    public function adminIndex()
{
    $resources = Resource::latest()->get();

    return view('admin.resources.index', compact('resources'));
}
public function approve($id)
{
    $resource = Resource::findOrFail($id);
    $resource->is_approved = true;
    $resource->save();

    return back();
}

public function reject($id)
{
    $resource = Resource::findOrFail($id);
    $resource->delete();

    return back();}
    public function create()
    {
        return view('resources.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:url,pdf',
            'link' => 'nullable|url',
            'file' => 'nullable|file|mimes:pdf|max:2048',
            'category_id' => 'required|integer'
        ]);

        $filePath = null;

        if ($request->type === 'pdf' && $request->hasFile('file')) {
            $filePath = $request->file('file')->store('resources', 'public');
        }

        Resource::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'type' => $request->type,
            'link' => $request->link,
            'file_path' => $filePath,
            'category_id' => $request->category_id,
            'is_approved' => false
        ]);

        return redirect()->back()->with('success', 'Resource submitted successfully!');
    }
}