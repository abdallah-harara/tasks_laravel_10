<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Registar orm</h1>
        @include('forms.errors')

        <form method="POST" action="{{ route('form4_data') }}">
            @csrf
            <div class="mb-4">
                <label for="">Name</label>
                <input type="text" placeholder="name"
                    class="form-control @error('name')is-invalid

        @enderror " name="name" value="{{ old('name') }}"
                    autocomplete="new-name">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4>

                <label for="">email</label>
                <input type="email" placeholder="email"
                    class="form-control @error('email')is-invalid

        @enderror " name="email" value="{{ old('email') }}"
                    autocomplete="new-email">
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4">
                <label for="">password</label>
                <input type="password" placeholder="password"
                    class="form-control @error('password')is-invalid

               @enderror " name="password" value="{{ old('password') }}">
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror

            </div>
            <div class="mb-4">
                <label for=""> Confirm Password</label>
                <input type="password" placeholder="password"
                    class="form-control" name="password_confirmation">

            </div>
            <div class="mb-4">
                <label for="">Bie</label>
                <textarea placeholder="inter text" rows="5" class="form-control @error('bio')is-invalid

        @enderror "
                    name="bio" >{{ old('bio') }}</textarea>
                @error('bio')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="text-center">
                <button class="btn btn-dark w-25">Send</button>
            </div>
        </form>
    </div>
</body>

</html>
