<?php

// namespace App\Http\Controllers;

// use App\Models\Resep;
// use Illuminate\Http\Request;

// class ResepController extends Controller
// {
//     // Menampilkan halaman control dan mengambil semua resep
//     public function control()
//     {
//         $reseps = Resep::all(); // Mengambil semua data resep
//         return view('admin.resep.control', compact('reseps'));
//     }

//     // Menyimpan resep baru
//     public function store(Request $request)
//     {
//         // Validasi input dari user
//         $request->validate([
//             'nama' => 'required|string|max:255',
//             'deskripsi' => 'required|string',
//             'bahan' => 'required|string',
//             'langkah' => 'required|string',
//         ]);

//         // Menyimpan resep menggunakan create
//         Resep::create([
//             'nama' => $request->nama,
//             'deskripsi' => $request->deskripsi,
//             'bahan' => $request->bahan,
//             'langkah' => $request->langkah,
//         ]);

//         return redirect()->route('resep.control')->with('success', 'Resep berhasil ditambahkan!');
//     }

//     // Menampilkan form edit resep
//     public function edit($id)
//     {
//         $resep = Resep::findOrFail($id); // Menemukan resep berdasarkan ID
//         return view('admin.resep.edit', compact('resep'));
//     }

//     // Memperbarui resep yang sudah ada
//     public function update(Request $request, $id)
//     {
//         // Validasi input dari user
//         $request->validate([
//             'nama' => 'required|string|max:255',
//             'deskripsi' => 'required|string',
//             'bahan' => 'required|string',
//             'langkah' => 'required|string',
//         ]);

//         // Menemukan resep berdasarkan ID dan memperbarui data
//         $resep = Resep::findOrFail($id);
//         $resep->update([
//             'nama' => $request->nama,
//             'deskripsi' => $request->deskripsi,
//             'bahan' => $request->bahan,
//             'langkah' => $request->langkah,
//         ]);

//         return redirect()->route('resep.control')->with('success', 'Resep berhasil diperbarui!');
//     }

//     // Menghapus resep berdasarkan ID
//     public function destroy($id)
//     {
//         $resep = Resep::findOrFail($id); // Menemukan resep berdasarkan ID
//         $resep->delete(); // Menghapus resep

//         return redirect()->route('resep.control')->with('success', 'Resep berhasil dihapus!');
//     }
// }
namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function control()
    {
        // Data dummy untuk tampilan
        $reseps = [
            (object) [
                'id' => 1,
                'nama' => 'Teh Hijau',
                'deskripsi' => 'Teh hijau yang menyehatkan tubuh.',
                'bahan' => 'Teh hijau, air panas.',
                'langkah' => '1. Seduh teh hijau dengan air panas.',
            ],
            (object) [
                'id' => 2,
                'nama' => 'Teh Hitam',
                'deskripsi' => 'Teh hitam dengan rasa yang kuat.',
                'bahan' => 'Teh hitam, air panas.',
                'langkah' => '1. Seduh teh hitam dengan air panas.',
            ]
        ];

        return view('admin.resep.control', compact('reseps'));
    }

    public function store(Request $request)
    {
        // Proses penyimpanan resep (tapi ini hanya simulasi karena belum terhubung ke DB)
        return redirect()->route('admin.resep.control')->with('success', 'Resep berhasil ditambahkan!');
    }

    public function edit()
    {
        $resep = [
            'id' => 1,
            'nama' => 'Teh Tarik',
            'deskripsi' => 'Teh susu khas Malaysia dengan rasa manis yang nikmat.',
            'bahan' => "1. Teh bubuk\n2. Susu kental manis\n3. Air panas",
            'langkah' => "1. Seduh teh bubuk dengan air panas.\n2. Tambahkan susu kental manis.\n3. Tarik teh beberapa kali hingga berbusa."
        ];
    
        // Ambil data resep berdasarkan ID
        // $resep = Resep::findOrFail($id);
        
        // Kirim data resep ke tampilan edit
        return view('admin.resep.edit', compact('resep'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'bahan' => 'required|string',
            'langkah' => 'required|string',
        ]);

        // Temukan resep berdasarkan ID
        $resep = Resep::findOrFail($id);

        // Update data resep
        $resep->update($request->all());

        // Redirect kembali ke halaman daftar resep dengan pesan sukses
        return redirect()->route('admin.resep.control')->with('success', 'Resep berhasil diperbarui!');
    }


    public function destroy($id)
    {
        // Logika hapus (bisa tambahkan data dummy atau terhubung ke DB nanti)
    }
}
