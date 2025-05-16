<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELAMAT MADANG</title>
</head>
<body>
    <h1>Hello people</h1>
    <p>Selamat Datang di Toko Buku</p>

    @foreach ($books as $book )
        <ul>
            <li>{{ $book['title'] }}</li>
            <li>{{ $book['description'] }}</li>
            <li>{{ $book['price'] }}</li>
            <li>{{ $book['stock'] }}</li>
            <li>{{ $book['cover_photo'] }}</li>
            <li>{{ $book['genre_id'] }}</li>
            <li>{{ $book['author_id'] }}</li>
        </ul>

    @endforeach
</body>
</html>