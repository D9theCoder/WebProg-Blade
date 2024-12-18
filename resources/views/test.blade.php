<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <h1>Pusinggggg</h1>
    <ul>
        @foreach ($floodLocations as $loc)
        <li>Location Name: {{ $loc->name }}</li>
        <ul>
            @foreach ($loc->cityDetails as $cityDetail)
                <li>
                    Kelurahan: {{ $cityDetail->kelurahan }},
                    Latitude: {{ $cityDetail->latitude }},
                    Longitude: {{ $cityDetail->longitude }},
                    Indeks Banjir: {{ $cityDetail->indeksBanjir }},
                    Kategori: {{ $cityDetail->kategori }}
                </li>
            @endforeach
        </ul>
    @endforeach
    </ul>
</body>
</html>