<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 2 data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
                <h1>Information Form</h1>
                <div class="alert alert-warning">
                    <h2>Welcome Registar</h2>
                    <p>Name : {{ $name }}</p>
                     <p>email : {{ $email }}</p>
                      <p>password : {{ $password }}</p>
                       <p>age : {{ $age }}</p>
                        <p>number : {{ $number }}</p>
                </div>

    </div>
</body>

</html>
