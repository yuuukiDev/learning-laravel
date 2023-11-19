<h1>Create Post</h1>


<form action="{{route('posts.store')}}" method= "post">
    @csrf

    @if($errors->any())
        <div class="alert aler-tdanger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input type="text" name="title" placeholder="Title" value="{{old('title')}}">
    <input type="text" name="body" placeholder="Body" value={{old('body')}} >
    <button type="submit">Submit</button>
</form>
