<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Create Posts</title>
</head>
<body>
  <header class="container mb-3">
    <h1>Create Post</h1>
  </header>
  <main class="container">
    <form action="{{route('posts.store')}}" method="post" class="mb-3">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Post Title">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <input type="text" class="form-control" id="body" name="body" placeholder="Post Body">
      </div>
      <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
  </main>
</body>
</html>
