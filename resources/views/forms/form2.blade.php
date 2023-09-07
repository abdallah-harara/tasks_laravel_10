<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
                <h1>Information Form</h1>
                <form action="{{ route('form2_data') }}" method="post">
                    @csrf

                    <input type="text" placeholder="name" name="name" class="form-control mb-3"/>
                    <input type="email" placeholder="email" name="email" class="form-control mb-3"/>
                    <input type="age" placeholder="age" name="age" class="form-control mb-3"/>
                    <input type="password" placeholder="password" name="password" class="form-control mb-3" autocomplete="new_password"/>
                    <input type="number" placeholder="number" name="number" class="form-control mb-3"/>
                    <button class="btn btn-dark w-100">SEND</button>
                </form>

    </div>
</body>

</html>
