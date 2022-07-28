<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return $categories;
    }

    public function show($slug)
    {
        $category = Category::with(['posts' => function($q) {
            $q->where('published', true);
        }])->where('slug', $slug)->first();

        return $category;
    }
}
