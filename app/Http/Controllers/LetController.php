<?php

namespace App\Http\Controllers;

use App\Let;
use Illuminate\Http\Request;

class LetController extends Controller
{
    public function index()
    {
        $letovi = Let::all();
        return view('letovi', [
            'letovi' => $letovi
        ]);
    }
    public function delete(Request $request)
    {
        $let = Let::find($request->let_id);
        if ($let->delete())
            return response()->json([
                'message' => "Uspesno obrisan let!"
            ]);
        return response()->json([
            'message' => "Let je vec izbrisan!"
        ]);
    }
    public function getForma(Request $request)
    {
        $let_id = $request->query('let_id');
        $let = Let::find($let_id);

        return view('let', [
            'let' => $let
        ]);
    }
}
