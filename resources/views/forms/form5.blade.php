<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
                <h1>Basic form</h1>
@include('forms.errors')

     <form method="POST" action="{{ route('form5_data') }}" enctype="multipart/form-data">

        @csrf

        <div class="mb-4">

            <label for="">Name</label>
        <input type="text" placeholder="name" class="form-control @error('name')is-invalid

        @enderror " name="name" >
         @error('name')
              <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-4">
        <label for="">CV</label>
        <input type="file" placeholder="cv" class="form-control @error('cv')is-invalid

        @enderror" name="cv" >
        @error('cv')
              <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="text-center">
            <button class="btn btn-dark w-25">Send</button>

     </form>
    </div>
</body>

</html>
