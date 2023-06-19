<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        // $category = Category::findOrFail(3);
        
        // DD($category->articles()->select('id', 'title')->where('category_id','=', 3)->value('title'));

        // DD($category->articles);


        // return view('categories.index');
    }
}
