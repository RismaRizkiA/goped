<?php

namespace App\Http\Controllers;

use App\Models\JualSampah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jual_sampah = JualSampah::all();
        return view('dashboard', compact('jual_sampah'));
    }
}
