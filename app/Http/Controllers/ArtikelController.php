<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function Artikel()
    {
        // Data dummy untuk artikel
        $artikel = [
            [
                'nama' => 'Teh Hijau',
                'images' => 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1617593506/attached_image/memetik-manfaat-teh-hijau-untuk-kesehatan-0-alodokter.jpg',
                'deskripsi' => 'Teh hijau segar dengan manfaat antioksidan tinggi.',
                'deskripsi_singkat' => 'Baca Selengkapnya',
                'lokasi' => 'Jawa Barat',
            ],
            [
                'nama' => 'Teh Oolong',
                'images' => 'https://images.tokopedia.net/blog-tokopedia-com/uploads/2021/06/Featured_Manfaat-Teh-Hitam-untuk-Kesehatan.jpg',
                'deskripsi' => 'Teh oolong dengan rasa yang unik dan kaya akan antioksidan.',
                'deskripsi_singkat' => 'Baca Selengkapnya',
                'lokasi' => 'China',
            ],
            [
                'nama' => 'Teh Hitam',
                'images' => 'https://media.suara.com/pictures/653x366/2022/02/16/93756-ilustrasi-teh-oolong.webp',
                'deskripsi' => 'Teh hitam yang kuat dengan aroma khas, cocok untuk segala suasana.',
                'deskripsi_singkat' => 'Baca Selengkapnya',
                'lokasi' => 'India',
            ],
        ];

        // Kirim data ke view
        return view('tehs.Artikel.Artikel', compact('artikel'));
    }

        public function Detailartikel()
    {
        // Data dummy untuk artikel
        $artikel = [
            [
                'nama' => 'Teh Hijau',
                'images' => 'https://images.tokopedia.net/blog-tokopedia-com/uploads/2021/06/Featured_Manfaat-Teh-Hitam-untuk-Kesehatan.jpg',
                'deskripsi' => 'Teh hijau adalah salah satu jenis tumbuhan Camellia sinensis. Tumbuhan ini banyak digunakan untuk pengobatan di Jepang dan Cina sejak berabad-abad lalu. Dibandingkan dengan jenis teh lainnya, proses pengolahan teh hijau lebih singkat sehingga kandungan antioksidan dan nutrisi di dalamnya tetap terjaga.',
                'lokasi' => 'Jawa Barat',
                'produk_teh' => [ // Menambahkan data produk teh
                    [
                        'nama' => 'Teh Hijau Premium',
                        'gambar' => 'https://paxelmarket.co/wp-content/uploads/2021/09/IMG_20210610_073106_010.jpg',
                        'deskripsi' => 'Teh hijau premium dari daerah Jawa Barat.',
                        'whatsapp' => '6281234567890',
                        'shopee_link' => 'https://shopee.co.id/teh-hijau-premium'
                    ],
                    [
                        'nama' => 'Teh Hijau Organic',
                        'gambar' => 'https://down-id.img.susercontent.com/file/id-11134201-23020-ugorp7l3wvnve3',
                        'deskripsi' => 'Teh hijau organik yang dipanen dari kebun yang ramah lingkungan.',
                        'whatsapp' => '6289876543210',
                        'shopee_link' => 'https://shopee.co.id/teh-hijau-organic'
                    ],

                    [
                        'nama' => 'Teh Hijau Coffe',
                        'gambar' => 'https://tehvilla.com/wp-content/uploads/2023/02/Artboard-2-1024x948-1.jpg',
                        'deskripsi' => 'Teh hijau organik yang dipanen dari kebun yang ramah lingkungan.',
                        'whatsapp' => '6289876543210',
                        'shopee_link' => 'https://shopee.co.id/teh-hijau-organic'
                    ]
                ]
            ],
            // Artikel lain bisa ditambahkan di sini
        ];

        // Kirim data ke view
        return view('tehs.Artikel.Detailartikel', compact('artikel'));
    }

    
}
