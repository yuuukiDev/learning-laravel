<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Edit Post</title>
</head>
<body>
  <header class="container mb-3">
    <h1>Edit Post {{$post->title}}</h1>
  </header>
  <main class="container">
    <form action="{{route('posts.update', $post->id)}}" method="post" class="mb-3">
        @method('PUT')
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Post Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Post Body</label>
        <input type="text" class="form-control" id="body" name="body" value="{{$post->body}}">
      </div>
      <button type="submit" class="btn btn-primary">Edit Post</button>
    </form>
  </main>
</body>
</html>
