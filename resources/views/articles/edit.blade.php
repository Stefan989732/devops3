
    <h1>Edit</h1>

    <div>
        <form method="POST" action="/articles/{{$article->id}}">
            @csrf
            @method('PUT')

            <label for="Title">Title:</label><br>
            <input type="text" id="Title" name="title" value="{{$article->title}}" style="width: 80%; height: 42px"><br>
            <label for="excerpt">Excerpt:</label><br>
            <input type="text" id="excerpt" name="excerpt" value="{{$article->excerpt}}" style="width: 80%; height: 125px"><br>
            <label for="body">Body:</label><br>
            <input type="text" id="body" name="body" value="{{$article->body}}" style="width: 80%; height: 375px"><br><br>
            <button type="submit" value="Submit">Submit</button>
        </form>
        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>

