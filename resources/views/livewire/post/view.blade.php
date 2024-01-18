<div>
    <div class="row">
        <h1 class="col-md-12" style="font-size: 35px;">{{ $data['post']->title }}</h1><br>
        <p class="col-md-12">{{ $data['post']->body }}</p>
        <br>
        <form wire:submit="postComment({{ $data['post']->id }})">
            <input style="width: 90%;" value="" wire:model="title" type="text" placeholder="Write Comment" />
            <button type="submit" >Save</button>
        </form>
        <h2>Comments:</h2>
        <ul>
            @foreach($data['post']->comments as $comment)
                <li>{{ $comment->body }}</li>
            @endforeach
        </ul>

    </div>
</div>
