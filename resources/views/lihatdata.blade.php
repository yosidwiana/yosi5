<!DOCTYPE html>
<html>
<head>
    <title> Lihat Data </title>
</head>
<body>
</body>
@foreach($liat as $li)
    <li>{{ $li->id }}</li>

@endforeach
</html>