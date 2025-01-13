<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi menejemen novel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
    <div class="nav">
        <ul>
            <li> <a href="kategori">kategori</a></li>
            <li><a href=penerbit>penerbit</a></li>
            <li><a href=novel>novel</a></li>
        </ul>
    </div>
    <h3>kategori</h3>
    <a href="{{ route('kategori.create') }}" class="tombol">tambah</a>
    <table>
        <thead>
            <tr>
                <th>NO.</th>
                <th>Nama Kategori</th>
                <th>aksi</th>
            </tr>
        </thead>
        <body>
            <!-- {{}} -->
        </body>
    </table>
    <div class="footer">&copy; 2024 Hari Aspriyono</div>
    </div>
</body>
</html>