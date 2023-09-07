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
                <h1>Users Information</h1>
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Insurance serial</th>
                        <th>Insurance start</th>
                        <th>Insurance Expire</th>

                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td>{{ $user->insurance?$user->insurance->serial:'' }} </td>
                    <td>{{ $user->insurance?$user->insurance->start:'' }} </td>
                    <td>{{ $user->insurance?$user->insurance->expire:''}} </td> --}}
                    {{-- //كنانستخدم الشرط في حال كان في بيانات واذا ما في بيانات وبطلعلنا فاضي بدل الايرور طبعا هادي بتاخد وقت
                    // في اختصار من دون منستخدم الشرط من خلال الذهاب للمودل اليوززر اللي داخله فنكشن انشورنس ونعطيه ويث ديفولتوبس --}}
                    <td>{{ $user->insurance->serial }}</td>
                    <td>{{ $user->insurance->start }}</td>
                    <td>{{ $user->insurance->expire }}</td>
                        </tr>
                    @endforeach
                </table>
    </div>
</body>

</html>
