<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Create Todos</title>
</head>
<body>
  <header class="container mb-3">
    <h1>Create Todos</h1>
  </header>
  <main class="container">
    <form action="{{route('todo.store')}}" method="post" class="mb-3">
      @csrf
      <div class="mb-3">
        <label for="task" class="form-label">Task Name</label>
        <input type="text" class="form-control" id="task" name="task" placeholder="Enter a task name...">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Enter a description for the task...">
      </div>
      <button type="submit" class="btn btn-primary">Add Task</button>
    </form>
  </main>
</body>
</html>
