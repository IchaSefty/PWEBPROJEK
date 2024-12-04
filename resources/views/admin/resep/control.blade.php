<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Resep Teh - Admin</title>
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

        .btn-danger {
            background-color: #e63946;
        }

        .btn-danger:hover {
            background-color: #b71d24;
        }

        /* Form */
        form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group textarea {
            height: 100px;
            resize: none;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .table th {
            background-color: #2a7f48;
            color: white;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        /* Styling tombol di kolom aktivitas */
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px; /* Jarak antar tombol */
        }

        .action-buttons form {
            margin: 0;
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
                <li><a href=""{{route('tehs.manfaatteh')}}>Manfaat teh</a></li>
            </ul>
            <div class="search-container">
                <input type="text" placeholder="Cari produk atau artikel..." id="search-input">
                <button id="search-button">Cari</button>
            </div>
        </nav>
    </header>

    <!-- Container -->
    <div class="container">
        <h1>Kelola Resep Teh</h1>

        <!-- Form Tambah/Update Resep -->
        <form method="POST" action="{{ route('resep.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Resep</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama resep" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Resep</label>
                <textarea id="deskripsi" name="deskripsi" placeholder="Deskripsikan resep" required></textarea>
            </div>
            <div class="form-group">
                <label for="bahan">Bahan</label>
                <textarea id="bahan" name="bahan" placeholder="Daftar bahan resep" required></textarea>
            </div>
            <div class="form-group">
                <label for="langkah">Langkah-Langkah</label>
                <textarea id="langkah" name="langkah" placeholder="Langkah-langkah pembuatan resep" required></textarea>
            </div>
            <button type="submit" class="btn">Simpan Resep</button>
        </form>

        <!-- Daftar Resep -->
        <h2>Daftar Resep</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aktivitas</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reseps as $resep)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $resep->nama }}</td>
                        <td>{{ $resep->deskripsi }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.resep.edit', $resep->id) }}" class="btn">Edit</a>
                                <form action="{{ route('resep.destroy', $resep->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Belum ada resep tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; 2024 Ruang Teh. Nikmati momen bersama teh terbaik.</p>
    </footer>
</body>
</html>
