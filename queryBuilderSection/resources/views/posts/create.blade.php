<h1>Create Post</h1>



<form action="{{route('posts.insert')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="body" placeholder="Body">
    <button type="submit">Submit</button>
</form>
