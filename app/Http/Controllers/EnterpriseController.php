<?php

namespace App\Http\Controllers;

use App\Models\enterprise;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los registros de la tabla users
        $enterprise = enterprise::all();

        // Retornar los registros como respuesta JSON
        return response()->json($enterprise);
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
        $data = $request->all();

        // Verifica si se subió un archivo
        if (!$request->hasFile('img_logo')) {
            return response()->json([
                'message' => 'Image is required',
                'response' => 422,
                'success' => false,
            ], 422);
        }

        // Valida el archivo
        $request->validate([
            'img_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta las reglas según tus necesidades
        ]);

        // Define el directorio donde se guardará la imagen
        $directory = storage_path('app/public/enterprise/');
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true); // Crea la carpeta con permisos 0777
        }

        // Guarda la imagen en el directorio especificado
        $file = $request->file('img_logo');
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); // Genera un nombre único para la imagen
        $file->move($directory, $fileName); // Mueve la imagen al directorio

        // Genera la ruta relativa para almacenar en la base de datos
        $imagePath = 'storage/enterprise/' . $fileName;

        // Guarda la ruta de la imagen en los datos
        $data['img_logo'] = $imagePath;
        $data['created_at'] = now();

        // Crea la entrada en la base de datos
        enterprise::create($data);

        // Retorna una respuesta JSON
        return response()->json([
            'message' => 'Enterprise created successfully',
            'response' => 201,
            'success' => true,
            'data' => $data, // Incluye los datos en la respuesta para verificar
        ], 201);
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
