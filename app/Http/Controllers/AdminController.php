<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class AdminController extends Controller
{
    public function index()
    {
        $total = Curso::all();
        return view('admin.inicio', compact('total'));
    }
    
    
} 
