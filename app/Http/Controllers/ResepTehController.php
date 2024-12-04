<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepTehController extends Controller
{

    Public function ResepTeh()
    {
        $article= [
                            [
                                'nama' => 'Teh Hijau Lemon Madu Segar',
                                'deskripsi' => '"Teh Hijau Lemon Madu Segar" adalah minuman yang memadukan manfaat teh hijau dengan kelezatan lemon dan manis alami dari madu. Kombinasi ini menghasilkan rasa yang seimbang—ringan, segar, dan sedikit asam. Cocok untuk diminum di pagi hari sebagai penyegar tubuh atau di sore hari untuk relaksasi. Kandungan antioksidan dalam teh hijau, vitamin C dari lemon, serta sifat anti-inflamasi dari madu membuatnya tidak hanya nikmat tetapi juga menyehatkan. Minuman ini dapat dinikmati hangat untuk menenangkan atau dingin sebagai pelepas dahaga di hari yang panas. 🌿🍋',
                                'bahan' => '- 2 sdt daun teh hijau (atau 1 kantong teh hijau)
                                            - 250 ml air panas (80-85°C, jangan mendidih)
                                            - 1 sdm madu murni (sesuaikan dengan selera)
                                            - 1 irisan lemon segar
                                            - Es batu (opsional, untuk disajikan dingin)',
                                'langkah' => 'Langkah-langkah Membuat:
                
                                            1. Siapkan teh hijau:
                                            Jika menggunakan daun teh hijau, masukkan ke dalam infuser atau saringan.
                                            Jika menggunakan kantong teh, masukkan ke dalam cangkir.
                
                                            2. Seduh teh:
                                            Tuangkan air panas (tidak mendidih) ke dalam cangkir yang berisi teh hijau.
                                            Biarkan terendam selama 2-3 menit hingga aroma teh hijau tercium.
                
                                            3. Tambahkan lemon:
                                            Peras 1-2 tetes air lemon ke dalam teh, lalu masukkan irisan lemon untuk tambahan rasa.
                
                                            4. Campur madu:
                                            Tambahkan madu ke dalam teh dan aduk hingga larut. Sesuaikan tingkat kemanisan dengan selera.
                
                                            5. Sajikan hangat atau dingin:
                                            Untuk teh hangat: Sajikan langsung dalam cangkir.
                                            Untuk teh dingin: Dinginkan teh terlebih dahulu, lalu tuang ke dalam gelas berisi es batu.
                
                                            6. Hiasi dan nikmati:
                                            Tambahkan daun mint segar atau irisan lemon di tepi gelas untuk hiasan, jika diinginkan.',
                                'gambar' => 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1617593506/attached_image/memetik-manfaat-teh-hijau-untuk-kesehatan-0-alodokter.jpg',
                'gambar' => 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1617593506/attached_image/memetik-manfaat-teh-hijau-untuk-kesehatan-0-alodokter.jpg',

            ],
            
            [
                'nama' => 'Teh Hitam',
                'deskripsi' => 'Teh hitam yang kuat dan aromatik.',
                'bahan' => 'Daun teh hitam, air panas, gula',
                'langkah' => 'Seduh daun teh hitam dengan air panas selama 5-7 menit. Tambahkan gula sesuai selera.',
                'gambar' => 'https://images.tokopedia.net/blog-tokopedia-com/uploads/2021/06/Featured_Manfaat-Teh-Hitam-untuk-Kesehatan.jpg',
            ],
            [
                'nama' => 'Teh Herbal',
                'deskripsi' => 'Teh herbal yang menenangkan dengan rasa alami.',
                'bahan' => 'Bunga chamomile, air panas, madu',
                'langkah' => 'Seduh bunga chamomile dengan air panas selama 5-7 menit. Tambahkan madu sesuai selera.',
                'gambar' => 'https://media.suara.com/pictures/653x366/2022/02/16/93756-ilustrasi-teh-oolong.webp',
            ],
        ];
        return view('tehs.Resep', compact('article'));
    }
}
