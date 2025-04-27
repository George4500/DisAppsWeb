<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $archivo = $request->file('archivo');
        $path = Storage::put('imagenes', $archivo);
        return response()->json(['path' => $path], 200);
    }

    public function download($path)
    {
        if (\Auth::user()->role_id == 1) {
            if (Auth::user()->role_id == 1) {
                return Storage::download($path);
            } else {
                abort(403, 'No tienes permiso para descargar este archivo.');
            }
        }
    }
}