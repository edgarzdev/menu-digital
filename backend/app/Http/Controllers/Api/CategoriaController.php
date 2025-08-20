<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Categoria::with('productos')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'required|string',
        ]);

        $categoria = Categoria::create($request->all());
        return response()->json([
            "mensaje" => "categoria creada correctamente",
            "categoria" => $categoria
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::with('productos')->find($id);
        if (!$categoria) {
            return response()->json([
                'mensaje' => 'Categoria No encontrado'
            ], 404);
        }
        return $categoria;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categoria::find($id);
        if (!$categoria) {
            return response()->json(['error' => 'No encontrado'], 404);
        }

        $request->validate([
            'nombre' => 'sometimes|string|max:100',
            'descripcion' => 'sometimes|string',
        ]);

        $categoria->update($request->all());
        return response()->json([
            'mensaje' => 'categoria actualizada correctamente',
            'categoria' => $categoria
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
