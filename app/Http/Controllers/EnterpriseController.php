<?php

namespace App\Http\Controllers;

use App\Models\enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ("Hola");
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
    public function show(enterprise $enterprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(enterprise $enterprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, enterprise $enterprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(enterprise $enterprise)
    {
        //
    }
}
