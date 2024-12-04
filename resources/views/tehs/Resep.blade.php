<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Teh - Ruang Teh</title>
    <style>
        /* Gaya dasar */
        /* Reset dan Gaya Dasar */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: rgba(214, 246, 206, 0.54);
            color: #333;
            background: linear-gradient(to bottom, rgba(42, 127, 72, 0.7), rgba(0, 0, 0, 0.5)), url('https://ichef.bbci.co.uk/ace/ws/640/amz/worldservice/live/assets/images/2016/06/12/160612132854_tea_640x360_thinkstock_nocredit.jpg.webp') center/cover no-repeat;
        }
        a {
            text-decoration: none;
            color: #ffffff;
            transition: color 0.3s;
        }
        a:hover {
            color: #2a7f48;
        }
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

        /* Dropdown Container */
        .dropdown-container {
            display: flex;
            align-items: center;
            gap: 20px;
            outline: none;
            cursor: pointer;
        }

        .dropdown-container select {
            padding: 8px 12px;
            border-radius: 20px;
            border: 1px solid #ddd;
            font-size: 0.9rem;
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
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }
        
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .resep-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }
        .resep-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .resep-content {
            padding: 20px;
        }
        .resep-content h2 {
            margin: 0 0 10px;
            font-size: 1.5rem;
            color: #2a7f48;
        }
        .resep-content p {
            margin: 5px 0;
        }
        .resep-content ul {
            padding-left: 20px;
            margin: 10px 0;
        }
        footer {
            background-color: #2a2a2a;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
                <div class="logo">
                    <img src="{{asset('images/logo.png') }}" alt="logo">
                </div>        
            <ul class="nav-links">
                <li><a href="{{route('tehs.Homepageuser')}}">Beranda</a></li>
                <li><a href="{{route('tehs.artikel.Artikel')}}">Artikel</a></li>
                <li><a href="{{route('tehs.Resep')}}">Resep</a></li>
                <li><a href="{{route('tehs.manfaatteh')}}">Manfaat teh</a></li>
                <li><a href="#">Favorit</a></li>
            </ul>
            <div class="search-container">
                <input type="text" placeholder="Cari produk atau artikel..." id="search-input">
                <button id="search-button">Cari</button>
            </div>
            <div class="dropdown-container">
                <!-- Dropdown Provinsi -->
                <select id="provinsi" onchange="updateKabupaten()">
                    <option value="">Pilih Provinsi</option>
                    <option value="prov1">Jawa Timur</option>
                    <option value="prov2">Jawa Barat</option>
                    <option value="prov3">Jawa Tengah</option>
                    <!-- Tambahkan provinsi lainnya -->
                </select>
                <!-- Dropdown Kabupaten -->
                <select id="kabupaten">
                    <option value="">Pilih Kabupaten</option>
                </select>
            </div>
        </nav>
        <script>
            // Data kabupaten per provinsi
            const kabupatenData = {
                prov1: ['Kabupaten Banyuwangi', 'Kabupaten Jember', 'Kabupaten Lumajang'],
                prov2: ['Kabupaten Bandung', 'Kabupaten Cibubur'],
                prov3: ['Kabupaten Ngawi', 'Kabupaten Ngajuk', 'Kabupaten Madiun', 'Kabupaten Cilacap']
            };
               // Fungsi untuk memperbarui dropdown kabupaten berdasarkan provinsi yang dipilih
                function updateKabupaten() {
                const provinsi = document.getElementById('provinsi').value;
                const kabupatenSelect = document.getElementById('kabupaten');
                kabupatenSelect.innerHTML = '<option value="">Pilih Kabupaten</option>'; // Reset kabupaten
                
                if (provinsi) {
                    // Menambahkan kabupaten sesuai dengan provinsi yang dipilih
                    kabupatenData[provinsi].forEach(function(kabupaten) {
                        const option = document.createElement('option');
                        option.value = kabupaten;
                        option.textContent = kabupaten;
                        kabupatenSelect.appendChild(option);
                    });
                }
            }
        </script>
        </nav>
    </header>
    <div class="container">
        @foreach ($article as $resep)
        <div class="resep-card">
            <img src="{{ $resep['gambar'] }}" alt="{{ $resep['nama'] }}">
            <div class="resep-content">
                <h2>{{ $resep['nama'] }}</h2>
                <p><strong>Deskripsi:</strong> {{ $resep['deskripsi'] }}</p>
                <p><strong>Bahan:</strong></p>
                <ul>
                    @foreach (explode(',', $resep['bahan']) as $bahan)
                        <li>{{ trim($bahan) }}</li>
                    @endforeach
                </ul>
                <p><strong>Langkah:</strong> {{ $resep['langkah'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <footer>
        &copy; 2024 Ruang Teh. Semua hak dilindungi.
    </footer>
</body>
</html>