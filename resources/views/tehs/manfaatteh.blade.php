<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Teh - Artikel</title>
<style>
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
    /* Konten Utama */
    .content-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 40px auto;
        max-width: 1200px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .content-text {
        flex: 1;
        padding: 20px;
    }

    .content-text h1 {
        font-size: 2.5rem;
        color: #2a7f48;
        margin-bottom: 20px;
    }

    .content-text p {
        line-height: 1.6;
        margin-bottom: 10px;
    }

    .content-text ul {
        margin: 20px 0;
        padding: 0;
        list-style: none;
    }

    .content-text ul li {
        margin-bottom: 10px;
        font-weight: 600;
    }

    .content-text ul li::before {
        content: "✔";
        margin-right: 10px;
        color: #2a7f48;
    }

    .content-image {
        flex: 1;
        text-align: center;
    }

    .content-image img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
    }

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
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="logo">
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
    </header>


    <div class="content-wrapper">
        <div class="content-text">
            <h1>Manfaat Teh Yang Perlu Kamu Ketahui</h1>
            <p>Teh memiliki beragam manfaat kesehatan, mulai dari kandungan antioksidan yang mampu melawan radikal bebas dan mencegah kerusakan sel 
                tubuh, hingga membantu menurunkan berat badan dengan menghambat penyerapan dan membakar lemak saat berolahraga, asalkan tidak ditambahkan 
                gula atau susu secara berlebihan. Selain itu, konsumsi teh secara teratur dapat mendukung kesehatan kulit, menurunkan risiko kanker kulit, 
                diabetes tipe-2, dan penyakit Alzheimer melalui kandungan polifenol yang melindungi sel dari kerusakan. Teh juga membantu menurunkan kadar kolesterol 
                jahat (LDL) serta risiko penyakit kardiovaskular, meningkatkan kesehatan jantung berkat sifat antiinflamasi katekin, dan menjaga kekuatan gigi melalui efek antibakterinya. 
                Lebih lanjut, teh diketahui memperbaiki kualitas tidur, meningkatkan metabolisme tubuh dengan membakar hingga 100 kalori per hari, dan secara keseluruhan mendukung kualitas hidup jika dikonsumsi secara tepat.</p>
            <ul><p>Beberapa jenis teh diantaranya:</p>
                <li>Black Tea</li>
                <li>Oolong Tea</li>
                <li>Green Tea</li>
            </ul>
        </div>
        <div class="content-image">
            <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1617593506/attached_image/memetik-manfaat-teh-hijau-untuk-kesehatan-0-alodokter.jpg" alt="Esteh Indonesia">
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Ruang Teh. Nikmati momen bersama teh terbaik.</p>
    </footer>
</body>