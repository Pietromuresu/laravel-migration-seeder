<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light vh-100">
        <div class="container">

            <h1 class="text-center py-5">Trains</h1>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Number</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Arrival Date</th>
                    <th scope="col">Cars</th>
                    <th scope="col">Company</th>
                    <th scope="col">On Time</th>
                    <th scope="col">Deleted</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)

                    <tr>
                        <th scope="row">{{$train->id}}</th>
                        <td>{{$train->train_number}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_hour}}</td>
                        <td>{{$train->arrival_hour}}</td>
                        <td>{{$train->carriages_number}}</td>
                        <td>{{$train->company}}</td>

                        <td>{{$train->is_on_time === 0 ? 'LATE' : 'On Time'}}</td>
                        <td>{{$train->is_deleted === 0 ? '  ' : 'DELETED'}}</td>

                    </tr>
                    @endforeach
                </tbody>
              </table>

        </div>
        </main>

</body>

</html>
