<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Upcoming Events</title>
</head>
<body>
<form method="post" action="{{route('event.store')}}" enctype="multipart/form-data" id="form">
    @csrf
    <div class="container">
        <h1 class="text-center">{{$title}}</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group mt-2">
            <label for="event_description" class="w-50 m-auto d-block">Event Description</label>
            <textarea type="text" name="event_description" rows="10" id="event_description" class="form-control w-50 m-auto" placeholder="Event Description">{{ old('event_description') }}</textarea>
            <span class="text-danger w-50 m-auto d-block">
                @error('event_description')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group mt-2">
            <label for="event_location" class="w-50 m-auto d-block">Event Location</label>
            <input type="text" name="event_location" id="event_location" class="form-control w-50 m-auto" placeholder="Event Location" value="{{ old('event_location') }}">
            <span class="text-danger w-50 m-auto d-block">
                @error('event_location')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group mt-2">
            <label for="event_date" class="w-50 m-auto d-block">Event Date</label>
            <input type="date" name="event_date" id="event_date" class="form-control w-50 m-auto" placeholder="Event Date" value="{{ old('event_date') }}">
            <span class="text-danger w-50 m-auto d-block">
                @error('event_date')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group mt-2">
            <label for="event_time" class="w-50 m-auto d-block">Event Time</label>
            <input type="time" name="event_time" id="event_time" class="form-control w-50 m-auto" placeholder="Event Time" value="{{ old('event_time') }}">
            <span class="text-danger w-50 m-auto d-block">
                @error('event_time')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <button type="submit" class="btn btn-primary m-auto d-block mt-2">Submit</button>
    </div>
</form>
</body>
</html>
