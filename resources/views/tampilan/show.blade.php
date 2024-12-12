<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laptop</title>
</head>
<body>
    <h1>Detail Laptop</h1>
    <p>Nama: {{ $laptop->name }}</p>
    <p>Brand: {{ $laptop->brand }}</p>
    <p>Harga: {{ $laptop->price }}</p>
    <a href="{{ route('laptops.index') }}">Kembali ke daftar laptop</a>
</body>
</html>
