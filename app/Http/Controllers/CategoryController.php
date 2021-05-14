<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //
    function itemIndex(){
        return Category::find(1)->getItem;
    }
}
