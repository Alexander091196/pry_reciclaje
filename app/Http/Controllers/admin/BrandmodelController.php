<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Brandmodel;
use Illuminate\Http\Request;

class BrandmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Brandmodel::select('brandmodels.id', 'brandmodels.name', 'b.name as bname', 'brandmodels.description')->join('brands as b', 'brandmodels.brand_id', '=', 'b.id')->get();
        return view('admin.models.index', compact('models'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::pluck('name', 'id');

        return view('admin.models.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Brandmodel::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin.brands.index')->with('success', 'Marca registrada correctamente!');
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
