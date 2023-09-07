<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <style>
            .table th,
            .table td{
                vertical-align: middle
            }
        </style>
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-item-center mb-4">
            <h1>All Posts</h1>
        <a class="btn btn-primary px-5" href="{{route('posts.create') }}">Create New Post</a>
        </div>
        @if (session('msg'))
       <div class="alert alert-success">{{ session('msg') }}</div>
        @endif
        <form action="">
           <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Seearch ..." value="{{ request()->search }}" name="search" >
  <button class="btn btn-dark px-5" id="button-addon2">Search</button>

</div>
        </form>
        <table class="table table-hover table-bordered table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                {{-- <th>Content</th> --}}
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($posts as $post )
             <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                {{-- <td>{{Str::words($post->content, 8, '...') }}</td> --}}
                <td><img width="80" src="{{ asset('uploads/posts/'.$post->image) }}" alt=""></td>
                <td>{{ $post->created_at->format('M d, Y') }}</td>
                <td>{{ $post->updated_at->diffForHumans( )}}</td>
                <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    {{-- <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> --}}
                    <button class="btn btn-sm btn-danger btn-delete"><i class="fas fa-trash"></i></button>
                    <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('delete')
                    {{-- <button onclick="return confirm('Are You Shour Delete')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button> --}}
                </form>
                </td>
             </tr>
            @endforeach

        </table>
        {{-- {{ $posts->appends(['search'=>request()->search])->links() }} --}}
        {{ $posts->appends($_GET)->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
    $('.btn-delete').on('click', function(){
        let form =$(this).next('form');
      Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: 'green',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'

    )
    form.submit();
  }
})

    })
    </script>
</body>

</html>
