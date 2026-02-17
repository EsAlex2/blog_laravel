<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        return "Vista para mostrar los posts";
    }

    public function create()
    {
        return "Formulario para crear un post";
    }
}
