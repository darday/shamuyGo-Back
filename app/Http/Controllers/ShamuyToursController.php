<?php

namespace App\Http\Controllers;

use App\Models\ShamuyTours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShamuyToursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = DB::table('shamuy_tours')
            ->join('enterprises', 'enterprises.enterprise_code', '=', 'shamuy_tours.enterprise_code') // 
            ->select() // Selección de columnas específicas
            ->orderBy('departure_date', 'asc')
            ->get();

            return $tours;
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
    public function show(ShamuyTours $shamuyTours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShamuyTours $shamuyTours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShamuyTours $shamuyTours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShamuyTours $shamuyTours)
    {
        //
    }
}
