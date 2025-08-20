<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::with('categoria')->get();

        $productos->transform(function ($producto) {
            $producto->imagen_url = $producto->imagen ? asset('storage/' . $producto->imagen) : null;
            return $producto;
        });

        return $productos;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric',
            'categoria_id' => 'required|exists:categoria,id_categoria',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $path = $file->store('productos', 'public'); // se guarda en storage/app/public/productos
            $data['imagen'] = $path;
        }

        $producto = Producto::create($data);
        return response()->json($producto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return response()->json(['mensaje' => 'producto no encontrado'], 404);
        }
        return response()->json(['producto' => $producto], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return response()->json(['error' => 'No encontrado'], 404);
        }

        $request->validate([
            'nombre' => 'sometimes|string|max:100',
            'precio' => 'sometimes|numeric',
            'categoria_id' => 'sometimes|exists:categoria,id_categoria',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('imagen')) {
            // Opcional: eliminar imagen anterior
            if ($producto->imagen) {
                Storage::disk('public')->delete($producto->imagen);
            }

            $file = $request->file('imagen');
            $path = $file->store('productos', 'public');
            $data['imagen'] = $path;
        }

        $producto->update($data);
        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
