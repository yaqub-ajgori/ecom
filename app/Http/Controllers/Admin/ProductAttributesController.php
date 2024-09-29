<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductAttributesController extends Controller
{

    public function index()
    {
        return view('admin.attributes.index');
    }

    public function create()
    {
        return view('admin.attributes.create');
    }
}
