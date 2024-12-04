<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Artikel Teh - Admin</title>
    <style>
        /* Reset dan Gaya Dasar */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f9f4;
            color: #333;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.0)), url('https://www.rukita.co/stories/wp-content/uploads/2019/12/teh.jpg') center/cover no-repeat;
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
        text-decoration: none;
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


        /* Container */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            
        }

        h1 {
            color: #2a7f48;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background-color: #2a7f48;
            color: white;
            padding: 10px 15px;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #1f6236;
        }

        /* Table */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table td, .table th {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .table th {
            background-color: #2a7f48;
            color: white;
        }

        /* Image Styling */
        .table img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        /* Action Buttons */
        .action-btns {
            display: flex;
            gap: 10px;
            
        }

        .action-btns a {
            background-color: #2a7f48;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .action-btns a:hover {
            background-color: #1f6236;
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

    <!-- Container -->
    <div class="container">
        <h1>Kelola Artikel Teh</h1>

        <!-- Tabel Artikel -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Teh</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Lokasi</th>
                    <th>Aktivitas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article['id'] }}</td>
                        <td>{{ $article['nama'] }}</td>
                        <td>{{ $article['deskripsi'] }}</td>
                        <td><img src="{{ $article['gambar'] }}" alt="{{ $article['nama'] }}"></td>
                        <td>{{ $article['lokasi'] }}</td>
                        <td class="action-btns">
                            <!-- Tombol Edit -->
                            <a href="{{ route('admin.artikel.editartikel', $article['id']) }}">Edit</a>
                            
                            <!-- Tombol Hapus -->
                            <form action="{{ route('artikel.destroy', $article['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="background-color: #d9534f;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ route('admin.artikel.createartikel') }}" class="btn">Tambah Artikel</a>
    </div>
    <footer>
        <p>&copy; 2024 Ruang Teh. Nikmati momen bersama teh terbaik.</p>
    </footer>
</body>
</html>
