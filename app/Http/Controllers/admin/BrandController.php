<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Brand::create($request->all());  registra a todos los datos
        $logo = '';
        if ($request->logo != '') {
            $imagen = $request->file('logo')->store('public/brand_logo');
            $logo = Storage::url($imagen);
        }

        Brand::create([
            'name' => $request->name,
            'logo' => $logo,
            'description' => $request->description,
        ]);

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
        $brand = Brand::find($id);
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::find($id);
        $logo = '';
        if ($request->logo != '') {
            $imagen = $request->file('logo')->store('public/brand_logo');
            $logo = Storage::url($imagen);
        }

        $brand->update(
            [
                'name' => $request->name,
                'logo' => $logo,
                'description' => $request->description,
            ]
        );

        return redirect()->route('admin.brands.index')->with('success', 'Marca actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->route('admin.brands.index')->with('success', 'Marca eliminada correctamente!');
    }
}
