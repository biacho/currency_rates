<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>Laravel</title>

</head>

<body class="antialiased">
    <div class="container mt-5">
        <form action="refresh" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary mb-4">
                Refresh Rates
            </button>
        </form>

        <table class="table table-sm table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th>Currency</th>
                    <th>Code</th>
                    <th>Symbol</th>
                    <th>Rate (PLN)</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->currency_code }}</td>
                    <td>{{ $row->symbol }}
                    <td><span class="fw-bold">{{ $row->exchange_rate }}</span>
                        @php
                        if($row->change == 1)
                        echo('<span class="fs-5 text-success">⬈</span>');
                        elseif($row->change == 2)
                        echo('<span class="fs-5 text-danger">⬊</span>');
                        else
                        echo('<span class="fs-5">⬌</span>');
                        @endphp
                        <span class="fs-6 text-black-50">({{ $row->dif }})</span>
                    </td>
                    <td>{{ date('Y-m-d', strtotime($row->updated_at)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
