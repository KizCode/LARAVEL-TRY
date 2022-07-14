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
        @foreach($dosen as $kampus)
            Nama Dosen : {{ $kampus['nama'] }} <br>
            Mata Kuliah : {{ $kampus['mata'] }} <br>
            Mahasiswa <br>
            @foreach($kampus['maha'] as $mahas)
                {{ $mahas['nama'] }} - {{ $mahas['nilai'] }} <br>

                Hasil : {{ $mahas['nilai'] + $mahas['nilai'] }} <br>
                
            @endforeach
            
        @endforeach
    </fieldset>
</body>
</html>

@php
//     $size = count($sekolah);
// $keys = array_keys($sekolah);
// for($i = 0; $i < $size; $i++)
// {
//     echo $keys[$i]. "<br>";
//     foreach($sekolah[$keys[$i]] as $key => $value) {
//         echo $key . " : " . $value . "<br>";
//     }
//     echo "<br>";

@endphp