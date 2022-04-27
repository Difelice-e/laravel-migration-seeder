<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Trains</title>
</head>

<body>

    <div class="container">

        
        <h1 class="page-title">Treni in partenza</h1>
        

        <table>
            <thead>
                <th>Azienda</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Partenza</th>
                <th>Arrivo</th>
                <th>Codice treno</th>
                <th>N. Carroze</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </thead>

            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>{{ $train['company'] }}</td>
                    <td>{{ $train['departure_station'] }}</td>
                    <td>{{ $train['arrival_station'] }}</td>
                    <td>{{ $train['departure'] }}</td>
                    <td>{{ $train['arrival'] }}</td>
                    <td>{{ $train['code'] }}</td>
                    <td>{{ $train['carriages_number'] }}</td>
                    <td>{{ $train['in_time'] }}</td>
                    <td>{{ $train['cancelled'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>