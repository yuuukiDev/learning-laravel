<h1>Create Post</h1>



<form action="{{route('posts.update', $post->id)}}" method="post">
    @csrf
    <input type="text" name="title" value="{{$post->title}}">
    <input type="text" name="body" value="{{$post->body}}">
    <button type="submit">Submit</button>
</form>
