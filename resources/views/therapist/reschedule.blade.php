@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reschedule appointment:</title>
</head>
<body>


<div class="container">



<div class="card border-success mb-3" style="max-width: 28rem;">
<div class="card-body text-success">
    <form action="{{route('reschedule')}}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" name="date" class="form-control" id="date">
        </div>

        <div class="mb-3">
        <label for="time" class="form-label">Time</label>
        <input type="time" name="time" class="form-control" id="time">
        </div>

     

        <div class="mb-3" align="center";>
        <button type="submit" class="btn btn-primary">CONFIRM</button>
        </div>

    </form>

</div>
</div>
    
</body>
</html>

@endsection