<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Sport</title>
    <style>
        .nav {
            display: flex;
            width: 300px;
            justify-content: space-between
        }
        .container{
            margin-top:30px
        }
    </style>
</head>
<body>
    <h1>Toko Sport RPL 2</h1>
    <div class="nav">
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ url('/produk') }}">Produk</a>
        <a href="{{ url('/kontak') }}">Kontak</a>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>