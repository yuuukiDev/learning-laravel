<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Post</th>
            <th scope="col">Comments</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $key => $post)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$post->title}}</td>
            <td>
            @foreach ($post->comments as $k => $comment)
                <p>{{($k+1).'-'.$comment->body}}</p><br>
            @endforeach
         </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
