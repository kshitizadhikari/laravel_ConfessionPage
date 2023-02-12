@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Scheduled appointments:</h1>
    <table class="table">
        <thead>
            <tr>

            <th scope="col">Name</th>
            <th scope="col">Scheduled Date</th>
            <th scope="col">Time</th>
            <th scope="col">Payment</th>
            <th scope="col">Reschedule</th>
            <th scope="col">Cancel</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td scope="row">krisa</td>
                <td scope="row">1 feb</td>
                <td scope="row">5pm</td>
                <td scope="row">
                    <select>
                        <option>received</option>
                        <option>pending</option>
                    </select>
                </td>
                <td scope="row">

                    <button type="button" class="btn btn-outline-info">reschedule</button>

                </td>

                <td scope="row">
                    <button type="button" class="btn btn-danger">Cancel</button>

                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>

@endsection