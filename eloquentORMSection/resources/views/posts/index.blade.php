<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Posts</title>
</head>
<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">

          <div class="card">
            <div class="card-header p-3">
              <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>All Posts</h5>
            </div>
            <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">

              <table class="table mb-0">
                <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Body</th>
                  <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
@foreach($posts as $post)
<tr class="fw-normal">
    <th>
        <span class="ms-2">{{$post->id}}</span>
    </th>
    <td>
        <span>{{$post->title}}</span>
    </td>
    <td>
        <span class="ms-2">{{$post->body}}</span>
    </td>
    <td class="actions">
        <a class="btn btn-primary" href="{{route('posts.edit', $post->id)}}" role="button">Edit</a>
        &nbsp;
        <form action="{{route('posts.destroy', $post->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach

                </tbody>
              </table>
            </div>
            <div class="card-footer text-end p-3">
                <a class="btn btn-primary" href="{{route('posts.create')}}" role="button">Add Post</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
