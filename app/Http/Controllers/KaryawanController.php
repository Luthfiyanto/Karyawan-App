<?php

namespace App\Http\Controllers;
use App\Http\Resources\KaryawanResource;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //
    public function index()
    {
        $karyawanList = Karyawan::all();
        return view('karyawan.index', compact('karyawanList'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     // Add validation rule
        // ])

        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')->with('success','Karyawan created successfully');
    }

    public function show($nomor_induk)
    {
        $karyawan = Karyawan::find($nomor_induk);
        return view('karyawan.show',compact('karyawan'));
    }

    public function edit($nomor_induk)
    {
        $karyawan = Karyawan::find($nomor_induk);
        return view('karyawan.edit',compact('karyawan'));
    }

    public function update(Request $request, $nomor_induk)
    {
        // $request->validate([
        //     // Validation
        // ])

        $karyawan = Karyawan::find($nomor_induk);
        $karyawan->update($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Karyawan updated successfully');
    }

    public function destroy($nomor_induk)
    {
        $karyawan = Karyawan::find($nomor_induk);
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Karyawan deleted successfully');
    }

    


    // public function show($nomor_induk)
    // {
    //     $karyawan = Karyawan::find($nomor_induk);

    //     if(!$karyawan) {
    //         return response()->json(['message'=>'Karyawan not found']);
    //     }

    //     return new KaryawanResource($karyawan);
    // }
}
