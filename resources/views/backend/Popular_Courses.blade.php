<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Popular Form</title>
</head>
<body>
    <
<form method="post" action="{{$url}}" enctype="multipart/form-data"  id="form"  >
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
            <label for="course_name" class="w-50 m-auto d-block">Course Name</label>
            <input type="text" name="course_name" id="course_name" class="form-control w-50 m-auto" placeholder="Course Name" value="">
            <span class="text-danger w-50 m-auto d-block">
                @error('course_name')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group mt-2">
            <label for="course_image" class="w-50 m-auto d-block">Course Image</label>
            <input type="file" name="course_image" id="course_image" class="form-control w-50 m-auto" placeholder=""  aria-describedby="helpId">
            <span class="text-danger w-50 m-auto d-block">
                @error('course_image')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group mt-2">
            <label for="course_rate" class="w-50 m-auto d-block">Course Rate</label>
            <input type="number" name="course_rate" id="course_rate" class="form-control w-50 m-auto" placeholder="Course Rate" value="{{ old('course_rate') }}">
            <span class="text-danger w-50 m-auto d-block">
                @error('course_rate')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group mt-2">
            <label for="course_vote" class="w-50 m-auto d-block">Course Vote</label>
            <input type="number" name="course_vote" id="course_vote" class="form-control w-50 m-auto" placeholder="Course Vote" value="{{ old('course_vote') }}">
            <span class="text-danger w-50 m-auto d-block">
                @error('course_vote')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group mt-2">
            <label for="course_by" class="w-50 m-auto d-block">Course By</label>
            <input type="text" name="course_by" id="course_by" class="form-control w-50 m-auto" placeholder="Course By" value="{{ old('course_by') }}">
            <span class="text-danger w-50 m-auto d-block">
                @error('course_by')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button type="submit" class="btn btn-primary m-auto d-block mt-2">Submit</button>
    </div>
</form>
</body>
</html>
