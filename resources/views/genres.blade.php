<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre Buku</title>
</head>
<body>
    <h1>genre buku</h1>

    @foreach ($genres as $genre )
    <ul>
        <li>{{ $genre['id'] }}</li>
        <li>{{ $genre['name'] }}</li>
        <li>{{ $genre['description'] }}</li>
    </ul>

    @endforeach
</body>
</html>