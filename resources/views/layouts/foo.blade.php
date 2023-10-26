<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foo Project</title>
</head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Hobi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['jurusan'] }}</td>
                        <td>{{ $item['hoby'] }}</td>
                        <td><a href="">Edit</a> | <a href="">Hapus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>