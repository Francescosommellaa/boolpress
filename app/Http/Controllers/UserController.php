<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Mostra la vista per la dashboard dell'amministratore
    public function index()
    {
        return view('admin.index');
    }
}
