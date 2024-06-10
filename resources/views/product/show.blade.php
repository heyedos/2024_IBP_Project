<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <ul>
        @foreach ($product as $item)
        <h1>{{ $item->name }}</h1>
        <p>{{ $item->description }}</p>
        @endforeach
    </ul>
</body>
</html>

