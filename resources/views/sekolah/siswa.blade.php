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
        <legend>Siswa</legend>
        @foreach($siswa as $murid)
            Nama : {{ $murid['name'] }} <br>
            Umur : {{ $murid['age'] }} <br>
            @if ($murid['age'] >= 17)
                Anda Sudah Bisa Mendapatakan SIM <br> 
            @elseif($murid['age'] < 17 )
                Anda Belum Bisa Mendapatkan SIM <br>
            @endif
        @endforeach
    </fieldset>
</body>
</html>