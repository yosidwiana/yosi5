<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>

<body background="blue">
  <table style="width:auto">
        <tr>
            <th> ID </th>
            <th> Username </th>
            <th> Created </th>
            <th> Updated </th>
            <th> Options </th>
        </tr>
        @foreach($kategori as $row)
        <tr>
            
                <th>{{ $row->id }}</th>
                <th>{{ $row->username }}</th>
                <th>{{ $row->created_at }}</th>
                <th>{{ $row->updated_at }}</th>
                <th> 
                    <a href="/id/edit/{{$row->id}}">Edit</a>
                    <a href="/id/hapus/{{$row->id}}">Hapus</a>
        </tr>
        @endforeach
</table>

</body>

</html>
