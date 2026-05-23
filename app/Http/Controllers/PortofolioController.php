<?php

namespace App\Http\Controllers;

use App\Models\Portofolio; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
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
            'link_project' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' 
        ], [
            'judul.required' => 'Judul project wajib diisi!',
            'judul.min' => 'Judul project minimal harus 3 karakter.',
            'deskripsi.required' => 'Deskripsi project wajib diisi!',
            'link_project.url' => 'Format link harus berupa URL yang valid.',
            'gambar.image' => 'File yang diupload harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif.',
            'gambar.max' => 'Ukuran gambar maksimal adalah 2MB.'
        ]);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link_project' => $request->link_project,
        ];

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            
            $nama_gambar = time() . '_' . $file->getClientOriginalName();
           
            $file->move(public_path('img'), $nama_gambar);
            
           
            $data['gambar'] = $nama_gambar;
        }

        Portofolio::create($data);

        return redirect('/portofolio')->with('sukses', 'Project baru berhasil ditambahkan!');
    } 

    public function edit($id)
    {
        $portofolio = Portofolio::find($id); 
        return view('portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|min:3',
            'deskripsi' => 'required',
            'link_project' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'judul.required' => 'Judul project wajib diisi!',
            'judul.min' => 'Judul project minimal harus 3 karakter.',
            'deskripsi.required' => 'Deskripsi project wajib diisi!',
            'link_project.url' => 'Format link harus berupa URL yang valid.',
            'gambar.image' => 'File yang diupload harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif.',
            'gambar.max' => 'Ukuran gambar maksimal adalah 2MB.'
        ]);

        $portofolio = Portofolio::find($id);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link_project' => $request->link_project,
        ];

        
        if ($request->hasFile('gambar')) {
           
            if ($portofolio->gambar && File::exists(public_path('img/' . $portofolio->gambar))) {
                File::delete(public_path('img/' . $portofolio->gambar));
            }

            $file = $request->file('gambar');
            $nama_gambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $nama_gambar);
            
            $data['gambar'] = $nama_gambar;
        }

        $portofolio->update($data);

        return redirect('/portofolio')->with('sukses', 'Project berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $portofolio = Portofolio::find($id);

        
        if ($portofolio->gambar && File::exists(public_path('img/' . $portofolio->gambar))) {
            File::delete(public_path('img/' . $portofolio->gambar));
        }

        $portofolio->delete(); 

        return redirect('/portofolio')->with('sukses', 'Project berhasil dihapus!');
    }
}