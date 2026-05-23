<?php

namespace App\Http\Controllers;

use App\Models\Portofolio; 
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
   
    public function index()
    {
        $data_portofolio = Portofolio::all(); 
        return view('portofolio.index', compact('data_portofolio')); 
    }

    public function create()
    {
        return view('portofolio.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:3',
            'deskripsi' => 'required',
            'link_project' => 'nullable|url'
        ], [
            'judul.required' => 'Judul project wajib diisi!',
            'judul.min' => 'Judul project minimal harus 3 karakter.',
            'deskripsi.required' => 'Deskripsi project wajib diisi!',
            'link_project.url' => 'Format link harus berupa URL yang valid.'
        ]);

        Portofolio::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link_project' => $request->link_project,
        ]);

        return redirect('/portofolio')->with('sukses', 'Project baru berhasil ditambahkan!');
    } 
} 