<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Menampilkan daftar artikel
    // public function kelolaartikel()
    // {
        // $articles = Article::all();
    //     $articles = [collect([
    //         [
    //             'id' => 1,
    //             'nama' => 'Teh Hijau',
    //             'deskripsi' => 'Teh hijau memiliki manfaat kesehatan yang luar biasa.',
    //             'gambar' => 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1617593506/attached_image/memetik-manfaat-teh-hijau-untuk-kesehatan-0-alodokter.jpg',
    //             'lokasi' => 'Bandung, Jawa Barat',
    //         ],
    //         [
    //             'id' => 2,
    //             'nama' => 'Teh Hitam',
    //             'deskripsi' => 'Teh hitam dikenal dengan rasa dan aroma yang kuat.',
    //             'gambar' => 'https://images.tokopedia.net/blog-tokopedia-com/uploads/2021/06/Featured_Manfaat-Teh-Hitam-untuk-Kesehatan.jpg',
    //             'lokasi' => 'Bogor, Jawa Barat',
    //         ],
    //         [
    //             'id' => 3,
    //             'nama' => 'Teh Oolong',
    //             'deskripsi' => 'Teh Oolong adalah campuran sempurna antara teh hijau dan teh hitam.',
    //             'gambar' => 'https://media.suara.com/pictures/653x366/2022/02/16/93756-ilustrasi-teh-oolong.webp',
    //             'lokasi' => 'Malang, Jawa Timur',
    //         ],
    //     ])];

    //     return view('admin.artikel.kelolaartikel', compact('articles'));
    // }

    // Menampilkan form tambah artikel
    // public function createartikel()
    // {
    //     return view('admin.artikel.createartikel');
    // }

    // Menyimpan artikel baru
    // public function store(Request $request)
    // {
    //     Article::create($request->all());
    //     return redirect()->route('kelolaartikel')->with('success', 'Artikel berhasil ditambahkan!');
    // }

    // Menampilkan form untuk edit artikel
    // public function editartikel()
    // {
    //     $article = Article::findOrFail($id);
    //     return view('admin.artikel.editartikel', compact('article'));
    // }

    // Menyimpan perubahan artikel
    // public function update(Request $request, $id)
    // {
        // $article = Article::findOrFail($id);
        // $article->update($request->all());
        // $article =   $articles = [
            
    //             'id' => 1,
    //             'nama' => 'Teh Hijau',
    //             'deskripsi' => 'Teh hijau memiliki manfaat kesehatan yang luar biasa.',
    //             'gambar' => 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1617593506/attached_image/memetik-manfaat-teh-hijau-untuk-kesehatan-0-alodokter.jpg',
    //             'lokasi' => 'Bandung, Jawa Barat',
    //         ];
    //     return redirect()->route('kelolaartikel')->with('success', 'Artikel berhasil diperbarui!');
    // }

    // Menghapus artikel
    // public function destroy($id)
    // {
    //     $article = Article::findOrFail($id);
    //     $article->delete();
    //     return redirect()->route('kelolaartikel')->with('success', 'Artikel berhasil dihapus!');
    // }
    
    
        // Menampilkan daftar artikel
        public function kelolaartikel()
        {
            // Data dummy artikel
            $articles = collect([
                [
                    'id' => 1,
                    'nama' => 'Teh Hijau',
                    'deskripsi' => 'Teh hijau memiliki manfaat kesehatan yang luar biasa.',
                    'gambar' => 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1617593506/attached_image/memetik-manfaat-teh-hijau-untuk-kesehatan-0-alodokter.jpg',
                    'lokasi' => 'Bandung, Jawa Barat',
                ],
                [
                    'id' => 2,
                    'nama' => 'Teh Hitam',
                    'deskripsi' => 'Teh hitam dikenal dengan rasa dan aroma yang kuat.',
                    'gambar' => 'https://images.tokopedia.net/blog-tokopedia-com/uploads/2021/06/Featured_Manfaat-Teh-Hitam-untuk-Kesehatan.jpg',
                    'lokasi' => 'Bogor, Jawa Barat',
                ],
                [
                    'id' => 3,
                    'nama' => 'Teh Oolong',
                    'deskripsi' => 'Teh Oolong adalah campuran sempurna antara teh hijau dan teh hitam.',
                    'gambar' => 'https://media.suara.com/pictures/653x366/2022/02/16/93756-ilustrasi-teh-oolong.webp',
                    'lokasi' => 'Malang, Jawa Timur',
                ],
            ]);
    
            return view('admin.artikel.kelolaartikel', compact('articles'));
        }
    
        // Menampilkan form tambah artikel
        public function createartikel()
        {
            return view('admin.artikel.createartikel');
        }
    
        // Menyimpan artikel baru
        public function store(Request $request)
        {
            // Validasi input
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'lokasi' => 'required|string',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
            ]);
    
            // Menyimpan gambar jika ada
            if ($request->hasFile('gambar')) {
                $path = $request->file('gambar')->store('public/images');
                $validated['gambar'] = Storage::url($path); // Menyimpan URL gambar
            }
    
            // Menyimpan artikel baru
            Article::create($validated);
    
            return redirect()->route('admin.artikel.kelolaartikel')->with('success', 'Artikel berhasil ditambahkan!');
        }
    
        // Menampilkan form untuk edit artikel
        public function editartikel($id)
        {
            // Mendapatkan artikel berdasarkan ID
            // $article = Article::findOrFail($id);
            $article = collect(
            [
                    'id' => 1,
                    'nama' => 'Teh Hijau',
                    'deskripsi' => 'Teh hijau memiliki manfaat kesehatan yang luar biasa.',
                    'gambar' => 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1617593506/attached_image/memetik-manfaat-teh-hijau-untuk-kesehatan-0-alodokter.jpg',
                    'lokasi' => 'Bandung, Jawa Barat',
            ]);
    
            return view('admin.artikel.editartikel', compact('article'));
        }
    
        // Menyimpan perubahan artikel
        public function update(Request $request, $id)
        {
            // Validasi input
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'lokasi' => 'required|string',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
            ]);
    
            // Menemukan artikel berdasarkan ID
            $article = Article::findOrFail($id);
    
            // Menyimpan gambar baru jika ada
            if ($request->hasFile('gambar')) {
                // Menghapus gambar lama jika ada
                if ($article->gambar) {
                    unlink(public_path($article->gambar)); // Menghapus gambar lama dari server
                }
    
                // Menyimpan gambar baru
                $path = $request->file('gambar')->store('public/images');
                $validated['gambar'] = Storage::url($path); // Menyimpan URL gambar baru
            } else {
                // Jika tidak ada gambar baru, simpan gambar lama
                $validated['gambar'] = $article->gambar;
            }
    
            // Melakukan update artikel
            $article->update($validated);
    
            return redirect()->route('admin.artikel.kelolaartikel')->with('success', 'Artikel berhasil diperbarui!');
        }
    
        // Menghapus artikel
        public function destroy($id)
        {
            // Menemukan artikel berdasarkan ID
            $article = Article::findOrFail($id);
    
            // Menghapus gambar jika ada
            if ($article->gambar) {
                unlink(public_path($article->gambar)); // Menghapus gambar dari server
            }
    
            // Menghapus artikel
            $article->delete();
    
            return redirect()->route('admin.artikel.kelolaartikel')->with('success', 'Artikel berhasil dihapus!');
        }
    
    
}

