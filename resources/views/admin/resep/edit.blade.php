<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Resep</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), 
                        url('https://www.rukita.co/stories/wp-content/uploads/2019/12/teh.jpg') center/cover no-repeat;
            color: #fff;
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
        h1 {
            text-align: center;
            margin-top: 30px;
            color: #f4a261;
        }

        form {
            max-width: 600px;
            margin: 30px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 20px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #2a7f48;
            box-shadow: 0 0 5px rgba(42, 127, 72, 0.5);
        }

        button {
            display: block;
            width: 100%;
            background-color: #2a7f48;
            color: white;
            border: none;
            padding: 12px;
            margin-top: 30px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #1f6236;
            transform: scale(1.03);
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

    <h1>Edit Resep</h1>

    <!-- Form untuk mengupdate resep -->
    <form action="#" method="POST">
        <label for="nama">Nama Resep</label>
        <input type="text" id="nama" name="nama" value="{{ $resep['nama'] }}" required>

        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" required>{{ $resep['deskripsi'] }}</textarea>

        <label for="bahan">Bahan</label>
        <textarea id="bahan" name="bahan" required>{{ $resep['bahan'] }}</textarea>

        <label for="langkah">Langkah-Langkah</label>
        <textarea id="langkah" name="langkah" required>{{ $resep['langkah'] }}</textarea>

        <button type="submit">Update</button>
    </form>

    <footer>
        <p>&copy; 2024 Ruang Teh. Nikmati momen bersama teh terbaik.</p>
    </footer>
</body>
</html>
