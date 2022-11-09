<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitioController extends Controller
{
    public function landingpage() {
        return view('landingpage');
    }

    public function contacto($id = null) {
    if(!empty($id) and $id == '1234'){
        $nombre = 'Manuel Fernando Meidna Guerrero';
        $email = 'fercho335.medina@gmail.com';
        $telefono = '3310298465';
        $comentarios = 'Me gustaría unirme a su equipo, soy guitarrista y solista ¡Saludos!';
    }
    else {
        $nombre = '';
        $email = '';
        $telefono = '';
        $comentarios = '';
    }
        return view('contacto', compact('nombre', 'email', 'telefono', 'comentarios'));
    }

    public function recibeFormContacto(Request $request) {
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => ['required', 'email'],
            'telefono' => 'required | max:10 | min:10',
            'comentarios' => 'required'
        ]); 

        DB::table('contactos')->insert([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'comantarios' => $request->comentarios,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/contacto');
    }



}
