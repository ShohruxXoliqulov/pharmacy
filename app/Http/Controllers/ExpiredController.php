<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpiredRequest;
use App\Http\Requests\UpdateExpiredRequest;
use App\Models\Expired;

class ExpiredController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreExpiredRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Expired $expired)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expired $expired)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpiredRequest $request, Expired $expired)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expired $expired)
    {
        //
    }
}
