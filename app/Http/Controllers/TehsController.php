<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TehsController extends Controller
{
    public function Homepageuser(Request $request)
    {
        // Data dummy (lengkap dengan lokasi)
        $tehs = collect([
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

        // Tangkap input pencarian dari query string
        $search = $request->query('search');

        // Filter teh berdasarkan pencarian
        if ($search) {
            $tehs = $tehs->filter(function ($teh) use ($search) {
                return stripos($teh['nama'], $search) !== false || 
                       stripos($teh['lokasi'], $search) !== false;
            });
        }

        return view('tehs.Homepageuser', [
            'tehs' => $tehs,
            'search' => $search,
        ]);
    }

    // Method baru untuk menampilkan halaman Kebaikan Teh
    public function manfaat()
    {
        return view('tehs.manfaatteh'); // Pastikan Anda memiliki view ini
    }
}
