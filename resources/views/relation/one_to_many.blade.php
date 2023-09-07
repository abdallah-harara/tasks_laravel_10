<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center my-5 c">
        <h1>{{ $post->title }}</h1>
        <img class="w-50" src="{{ asset($post->image) }}" alt="">
        <div>{{ $post->content }}</div>
        <h3 class="mb-4">All Comments ({{ $post->comment->count() }}) </h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($post->comment as $comment)
                    <div class="text-start">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>{{ $comment->user->name }}</h4>
                            <p>{{ $comment->created_at->diffForHumans() }}</p>

                        </div>
                        <p>{{ $comment->comment }}</p>
                    </div>
                    @if (!$loop->last)
                        <hr>
                    @endif
                @endforeach
                <h4>Add New Comment</h4>
        <form action="{{ route('one_to_many_data') }}" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <textarea class="form-control mb-3" name="comment" placeholder="Type your Comment here.." rows="5"></textarea>
            <button class="btn btn-success">Submit</button>
        </form>
            </div>
        </div>

    </div>
</body>

</html>
