<?php

namespace App\Http\Controllers;

use App\Models\rawatInap; // Corrected namespace
use Illuminate\Http\Request;

class rawatInapController extends Controller
{
    
       // Menampilkan semua data (Read)
    public function indexUser()
    {
        $rawatInap = RawatInap::all(); // Ambil semua data dari tabel rawat_inap
        return view('user.rawatInap.index', compact('rawatInap'));
    }
    public function indexAdmin()
    {
        $rawatInap = RawatInap::all(); // Ambil semua data dari tabel rawat_inap
        return view('admin.rawatInap.index', compact('rawatInap'));
    }

    // Menampilkan form create
    public function createAdmin()
    {
        return view('admin.rawatInap.create');
    }
    public function createUser()
    {
        return view('user.rawatInap.create');
    }

    // Menyimpan data baru (Create)
    public function storeUser(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'tanggalCheckIn' => 'required|date',
            'tanggalCheckOut' => 'required|date',
            'tipeKamar' => 'required',
            'harga' => 'required',
            'jumlahTamu' => 'required|integer',
            'catatan' => 'nullable',
        ]);

        RawatInap::create($request->all());

        return redirect()->route('user.rawatInap.index')->with('success', 'Data berhasil ditambahkan!');
    }
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'tanggalCheckIn' => 'required|date',
            'tanggalCheckOut' => 'required|date',
            'tipeKamar' => 'required',
            'harga' => 'required',
            'jumlahTamu' => 'required|integer',
            'catatan' => 'nullable',
        ]);

        RawatInap::create($request->all());

        return redirect()->route('admin.rawatInap.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $rawatInap = RawatInap::findOrFail($id); // Ambil data berdasarkan ID
        return view('admin.rawatInap.edit', compact('rawatInap'));
    }

    // Menyimpan perubahan data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'tanggalCheckIn' => 'required|date',
            'tanggalCheckOut' => 'required|date',
            'tipeKamar' => 'required',
            'harga' => 'required',
            'jumlahTamu' => 'required|integer',
            'catatan' => 'nullable',
        ]);

        $rawatInap = RawatInap::findOrFail($id); // Ambil data berdasarkan ID
        $rawatInap->update($request->all()); // Update data

        return redirect()->route('admin.rawatInap.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Menghapus data
    public function destroy($id)
    {
        $rawatInap = RawatInap::findOrFail($id); // Ambil data berdasarkan ID
        $rawatInap->delete(); // Hapus data

        return redirect()->route('admin.rawatInap.index')->with('success', 'Data berhasil dihapus!');
    }

}
