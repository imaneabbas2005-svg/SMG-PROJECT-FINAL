<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Resource;

class AdminController extends Controller
{
    public function report()
    {
        $categories = Category::all();

        $data = [];

        foreach ($categories as $category) {

            $resources = Resource::where('category_id', $category->id)->get();

            $data[] = [
                'category' => $category->name,
                'total_resources' => $resources->count(),
                'total_pdfs' => $resources->where('type', 'pdf')->count(),
                'total_links' => $resources->where('type', 'url')->count(),
            ];
        }

        return view('admin.report', compact('data'));
    }
}