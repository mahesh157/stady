<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Latest News </title>
</head>
<body>
    <
<form method="post" action="{{$url}}" enctype="multipart/form-data"  id="form"  >
    @csrf
    <div class="container">
        <h1 class="text-center">{{$title}} </h1>

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
            <label for="news_name" class="w-50 m-auto d-block">News Name</label>
            <input type="text" name="news_name" id="news_name" class="form-control w-50 m-auto" placeholder="News Name" value="">
            <span class="text-danger w-50 m-auto d-block">
                @error('news_name')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group mt-2">
            <label for="news_image" class="w-50 m-auto d-block">News Image</label>
            <input type="file" name="news_image" id="news_image" class="form-control w-50 m-auto" placeholder=""  aria-describedby="helpId">
            <span class="text-danger w-50 m-auto d-block">
                @error('course_image')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group mt-2">
            <label for="news_description" class="w-50 m-auto d-block">News Description</label>
            <textarea type="text" name="news_description" rows="10" id="news_description" class="form-control w-50 m-auto" placeholder="News Description" value="{{ old('news_description') }}"></textarea>
            <span class="text-danger w-50 m-auto d-block">
                @error('news_description')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group mt-2">
            <label for="news_date" class="w-50 m-auto d-block">News Date</label>
            <input type="date" name="news_date" id="news_date" class="form-control w-50 m-auto" placeholder="News Date" value="{{ old('news_date') }}">
            <span class="text-danger w-50 m-auto d-block">
                @error('news_date')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <button type="submit" class="btn btn-primary m-auto d-block mt-2">Submit</button>
    </div>
</form>
</body>
</html>
