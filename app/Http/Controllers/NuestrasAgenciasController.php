<?php

namespace App\Http\Controllers;

use App\Models\Agencias;
use App\Models\InformacionInstitucional;
use App\Models\Slider;
use Illuminate\Http\Request;

class NuestrasAgenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $info = InformacionInstitucional::first();
        $agencias = Agencias::where('estado',1)
                ->latest()
                ->get();
          $slider = Slider::where('estado', 1)
    ->where('slider_categoria_id', 12)
    ->latest()
    ->first();
        return view('agencias', compact('info','agencias', 'slider'));
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
