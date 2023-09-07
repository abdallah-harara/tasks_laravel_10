<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
                <h1>Basic form</h1>
     <form method="POST" action="{{ route('form1_data') }}">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        {{-- {{ csrf_field() }} --}}
        @csrf
        <div class="mb-4">
            <label for="">Name</label>
        <input type="text" placeholder="name" class="form-control" name="name" >
        <label for="">Age</label>
        <input type="text" placeholder="age" class="form-control" name="age" >
        </div>
        <div class="text-center">
            <button class="btn btn-dark w-25">Send</button>
        </div>
     </form>
    </div>
</body>

</html>
