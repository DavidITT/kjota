<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.categories.index');
    }

    public function getCategories($type)
    {
        try {
            switch ($type){
                case 'categories':
                    $categories = Category::orderBy('priority', 'desc')
                        ->with('image:url,imageable_id')
                        ->paginate(6);
                    return response()->json($categories);
                case 'subcategories':
                    $categories = SubCategory::with(['image:url,imageable_id','category:id,name'])
                        ->paginate(6);
                    return response()->json($categories);
            }
        } catch (\Exception $e) {
            return response()->json('Error to get categories');
        }
    }
}
