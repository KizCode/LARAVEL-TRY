<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend> 
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Nama Supplier</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tokos as $data)
                    <tr>
                        <td>
                            {{ $data-> id }}
                        </td>
                         <td>
                            {{ $data-> nama_barang }}
                        </td>
                         <td>
                            {{ $data-> harga }}
                        </td>
                        <td>
                            {{ $data-> stok}}
                        </td>
                        <td>
                            {{ $data-> nama_supplier}}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
</body>
</html> 