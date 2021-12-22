<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class dashboardController extends Controller
{
    public function index()
    {
        $total = Curso::all();
        return view('dashboard', compact('total'));
    }
 }

