<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index()
    {
        return view('admin.sub-category.index');
    }

    public function create()
    {
        return view('admin.sub-category.create');
    }
}
