<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($kampus as $dosen)
    <fieldset>
            Nama : {{ $dosen['nama'] }} <br>
            Mata Kuliah : {{ $dosen['mata'] }} <br><br>
            Nama : <br>
            @php
                $nilai=0;
            @endphp
            @foreach ($dosen['mahas'] as $mahas)
            {{ $mahas['nama'] }} - {{ $mahas['nilai']}} <br>

                @php 
                    $nilai += $mahas['nilai'];
                @endphp
            
            @endforeach

            @php
               $rata = $nilai /count($dosen['mahas'])
            @endphp
            <br>
            Total Nilai Mahasiswa : {{ $nilai }} <br>
            Rata - Rata Nilai Skripsi <b>{{$dosen['nama']}}</b> : {{ $rata }}
            
        </fieldset>
    @endforeach
</body>
</html>

