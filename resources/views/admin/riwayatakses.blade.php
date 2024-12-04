<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Teh - Riwayat Akses</title>
    <style>
        /* Umum */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Header */
        header {
            background-color: #2a7f48;
            color: white;
            padding: 10px 20px;
        }

        header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-size: 1.2em;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        /* Kontainer Halaman Riwayat Akses */
        .container {
            margin: 30px auto;
            padding: 20px;
            max-width: 1200px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        /* Judul Halaman */
        h2 {
            font-size: 2rem;
            color: #2a7f48;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Tabel Riwayat Akses */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #2a7f48;
            color: white;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsif - Tabel menjadi scrollable pada layar kecil */
        @media screen and (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            th, td {
                font-size: 0.9rem;
                padding: 8px;
            }

            h2 {
                font-size: 1.5rem;
            }
        }

        /* Footer */
        footer {
            background-color: #2a2a2a;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Tombol Logout dan Aksi Lain */
        .btn {
            padding: 8px 16px;
            background-color: #f4a261;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #e76f51;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Riwayat Akses Pengguna</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Waktu Akses</th>
                    <th>IP Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($riwayatAkses as $index => $akses)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $akses->nama_pengguna }}</td> <!-- Pastikan 'nama_pengguna' adalah kolom yang sesuai -->
                    <td>{{ $akses->waktu_akses }}</td> <!-- Sesuaikan dengan kolom yang ada -->
                    <td>{{ $akses->ip_address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

