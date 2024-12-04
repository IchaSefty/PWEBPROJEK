<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Teh - Eksplorasi Dunia Teh</title>
    <style>
        /* Reset dan Gaya Dasar */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color:   rgba(214, 246, 206, 0.54);
            color: #333;
        }
        a {
            text-decoration: none;
            color: #ffffff;
            transition: color 0.3s;
        }
        a:hover {
            color: #2a7f48;
        }

        /* Header */
        header {
        background-color: #2a7f48;
        color: white;
        padding: 5px 10px;
    }

    /* Menata navbar agar tampil dengan rapi */
    header nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap; /* Agar elemen bisa membungkus jika layar lebih kecil */
    }

    /* Logo */
    .logo {
        font-family: Arial, sans-serif; /* Menggunakan font Arial */
        font-size: 1.5em; /* Ukuran logo yang lebih besar */
        font-weight: normal; /* Membuat font lebih tipis */
        margin-right: 20px; /* Jarak antara logo dan elemen berikutnya */
    }

    /* Navigasi Links */
    .nav-links {
        list-style: none;
        display: flex;
        gap: 20px;
        margin: 0;
        padding: 0;
    }

    .nav-links li a {
        font-family: Arial, sans-serif; /* Menggunakan font Arial */
        font-weight: bold; /* Membuat font lebih tipis */
        font-size: 1rem; /* Ukuran teks menyesuaikan logo */
        color: rgb(255, 255, 255);
        text-transform: uppercase; /* Menggunakan huruf kapital untuk menambah kesan formal */
    }

    /* Kontainer Pencarian */
    .search-container {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .search-container input {
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 20px;
        outline: none;
        font-size: 0.9rem;
        width: 200px;
        transition: width 0.3s;
    }

    .search-container input:focus {
        width: 300px;
    }

    .search-container button {
        background-color: #f4a261;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 20px;
        cursor: pointer;
        font-size: 0.9rem;
        transition: background-color 0.3s;
    }

    .search-container button:hover {
        background-color: #e76f51;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 768px) {
        .logo {
            font-size: 1.2em; /* Ukuran logo lebih kecil */
        }

        .nav-links {
            display: none; /* Menyembunyikan menu pada layar kecil */
        }

        header nav {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
    }
        /* Hero Section */
        .hero {
            position: relative;
            background: linear-gradient(to bottom, rgba(42, 127, 72, 0.7), rgba(0, 0, 0, 0.5)), url('https://ichef.bbci.co.uk/ace/ws/640/amz/worldservice/live/assets/images/2016/06/12/160612132854_tea_640x360_thinkstock_nocredit.jpg.webp') center/cover no-repeat;
            height: 60vh;
            color: rgb(255, 255, 255);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .hero-content {
            max-width: 600px;
            padding: 20px;
        }
        .hero-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .hero-content .btn {
            background-color: #f4a261;
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .hero-content .btn:hover {
            background-color: #e76f51;
        }

        /* Grid Konten */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .section-title {
            text-align: center;
            font-size: 2rem;
            color: #105110;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        /* Kartu Teh */
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column; /* Konten vertikal */
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            padding: 20px;
        }
        .card-body h3 {
            font-size: 1.5rem;
            margin: 0 0 10px;
        }
        .card-body p {
            margin: 0 0 15px;
            font-size: 1rem;
            color: #555;
        }
        .card-body a {
            display: inline-block;
            padding: 10px 15px;
            background-color: #a8e063;
            color: white;
            border-radius: 6px;
            transition: background-color 0.3s ease;
            text-align: center; /* Pusatkan teks */
        }
        .card-body a:hover {
            background-color: #56ab2f;
        }

        /* Footer */
       footer {
            background-color: #2a2a2a;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="logo">
            </div>
            
            <ul class="nav-links">
                <li><a href="{{ route('tehs.Homepageadmin') }}">Beranda</a></li>
                <li><a href="{{ route('admin.artikel.kelolaartikel') }}">Kelola Artikel</a></li>
                <li><a href="{{ route('admin.resep.control') }}"> Kelola Resep</a></li>
                <li><a href="{{route('tehs.manfaatteh')}}">Manfaat teh</a></li>
            </ul>
            <div class="search-container">
                <input type="text" placeholder="Cari produk atau artikel..." id="search-input">
                <button id="search-button">Cari</button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Rasakan Teh Terbaik dari Nusantara</h2>
            <p>Setiap tegukan membawa kehangatan dan kebaikan alami.</p>
            <button class="btn">Pelajari Lebih Lanjut</button>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="container">
        <h2 class="section-title">Pilihan Terbaik Kami</h2>
        <div class="grid-container">
            @forelse ($tehs as $teh)
                <div class="card">
                    <img src="{{ $teh['gambar'] }}" alt="{{ $teh['nama'] }}" class="card-img">
                    <div class="card-body">
                        <h3>{{ $teh['nama'] }}</h3>
                        <p>{{ $teh['deskripsi'] }}</p>
                        <p><strong>Lokasi:</strong> {{ $teh['lokasi'] }}</p>
                        <a href="{{ route('tehs.artikel.Detailartikel') }}">Lihat Detail</a>
                    </div>
                </div>
            @empty
                <p>Maaf, tidak ada teh yang ditemukan.</p>
            @endforelse
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Ruang Teh. Nikmati momen bersama teh terbaik.</p>
    </footer>
</body>
</html>