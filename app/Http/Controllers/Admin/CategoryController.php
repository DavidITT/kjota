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
                        ->where('parent_id','=', null)
                        ->paginate(6);
                    return response()->json($categories);
                case 'subcategories':
                    $categories = Category::orderBy('parent_id', 'desc')
                        ->with(['image:url,imageable_id','parentCategory:id,name'])
                        ->where('parent_id','!=', null)
                        ->paginate(6);
                    return response()->json($categories);
            }
        } catch (\Exception $e) {
            return response()->json('Error to get categories');
        }
    }
}
