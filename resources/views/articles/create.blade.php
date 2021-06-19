
    <h1 class="stopBeingSoDifficult">create new</h1>

    <div>
        <p>Alles met een * invullen!</p>
        <form method="POST" action="/articles">
            @csrf

            <label for="Title">* Title:</label><br>
            <input type="text" id="Title" name="Title" placeholder="Title" style="height: 42px; width: 50%">

            @error('Title')
            <p class="error">{{$errors->first('Title')}}</p>
            @enderror
            <br><br>
            <label for="Excerpt">* Excerpt:</label><br>
            <textarea cols="2" rows="5" id="Excerpt" name="Excerpt" placeholder="short version" style="height: 125px; width: 50%"></textarea>
            @error('Excerpt')
            <p class="error">{{$errors->first('Excerpt')}}</p>
            @enderror<br><br>
            <label for="Body">* Body:</label><br>
            <textarea cols="5" rows="5" id="Body" name="Body" placeholder="full version" style="height: 375px; width: 50%"></textarea>
            @error('Body')
            <p class="error">{{$errors->first('Body')}}</p>
            @enderror<br><br>
            <button type="submit" value="Submit">Submit</button>
        </form>

    </div>

