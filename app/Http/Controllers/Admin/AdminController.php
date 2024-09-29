<?php

namespace App\Http\Controllers\Admin;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.dashboard');
    }

    public function cartHistory(): View
    {
        return view('admin.cart.history');
    }

    public function orderHistory(): View
    {
        return view('admin.orders.history');
    }

    public function settings(): View
    {
        return view('admin.settings.index');
    }

    public function manageUsers(): View
    {
        return view('admin.users.index');
    }

    public function manageStores(): View
    {
        return view('admin.stores.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
