<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

    <h1 class="text-center">latest News </h1>
    <a href="{{route('backend.latestnews')}}">
        <button class="btn btn-primary m-2" style="float: right">Add</button>
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>news_id </th>
                <th>news_name</th>
                <th>news_image</th>
                <th>news_description</th>
                <th>news_date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($latestnews as $latestnews)
                <tr>
                    <td>{{ $latestnews->news_id }}</td>
                    <td>{{ $latestnews->news_name }}</td>
                    <td>{{ $latestnews->news_image }}</td>
                    <td>{{ $latestnews->news_description }}</td>
                    <td>{{ $latestnews->news_date }}</td>
                    <td>
                        <a href="{{ route('latestnews.edit', ['id' => $latestnews->news_id]) }}">
                            <button type="button" class="btn btn-primary m-2">Edit</button>
                        </a>
                        <a href="{{route('latestnews.delete',['id' =>$latestnews->news_id])}}">
                            <button class="btn btn-danger m-2">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Vg5b4l8p9t2tk26U5kII99a34wZ5a89Gv5T5L5u0hD5Sf5D5" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-ZMpKbB1m8A7F9z5n2+Fz5nQ9tQ8F9g9F5n5k9I3H5p5oBLSj5z5F5k5E5P5E5V5U5M5" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
