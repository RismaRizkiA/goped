<?php

namespace App\Http\Controllers;

use App\Models\JualSampah;
use Illuminate\Http\Request;

class JualSampahController extends Controller
{
    public function index()
    {
        $jual_sampah = JualSampah::orderBy('created_at', 'DESC')->get();
  
        return view('jual_sampahs.index', compact('jual_sampah'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jual_sampahs.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        JualSampah::create($request->all());
 
        return redirect()->route('jual-sampah')->with('success', 'Jual Sampah added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jual_sampah = JualSampah::findOrFail($id);
  
        return view('jual_sampahs.show', compact('jual_sampah'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jual_sampah = JualSampah::findOrFail($id);
  
        return view('jual_sampahs.edit', compact('jual_sampah'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jual_sampah = JualSampah::findOrFail($id);
  
        $jual_sampah->update($request->all());
  
        return redirect()->route('jual-sampah')->with('success', 'Jual Sampah updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jual_sampah = JualSampah::findOrFail($id);
  
        $jual_sampah->delete();
  
        return redirect()->route('jual-sampah')->with('success', 'Jual Sampah deleted successfully');
    }
}
