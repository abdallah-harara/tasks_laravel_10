<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
 <div class="container mt-5">
    <div class="d-flex justify-content-between align-item-center mb-4">
            <h1>Create New Post</h1>
        <a class="btn btn-primary px-5" href="{{ route('posts.index') }}">All Posts</a>
        </div>
        @include('forms.errors')
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" placeholder="Title" class="form-control">
            </div>
            <div class="mb-3">
                <label>image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label>Content</label>
                <textarea id="mytextarea" name="content" placeholder="content..." class="form-control" rows="5" ></textarea>
            </div>
            <button class="btn btn-success px-5">Add</button>
        </form>
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.2/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
</body>
</html>
