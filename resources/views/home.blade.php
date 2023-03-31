<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_TITLE') }}</title>

    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train['company'] }}</h5>
                            <p class="card-text">{{ $train['from'] }}</p>
                            <p class="card-text">{{ $train['to'] }}</p>
                            <p class="card-text">{{ $train['departure_time'] }}</p>
                            <p class="card-text">{{ $train['arrival_time'] }}</p>
                            <p class="card-text">{{ $train['code'] }}</p>
                            <p class="card-text">{{ $train['cars'] }}</p>
                            <p class="card-text">{{ $train['on_time'] }}</p>
                            <p class="card-text">{{ $train['canceled'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
