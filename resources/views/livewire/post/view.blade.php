<div>
    <div class="row">
        <h1 class="col-md-12" style="font-size: 35px;">{{ $data['post']->title }}</h1><br>
        <p class="col-md-12">{{ $data['post']->body }}</p>
        <br>

        <form wire:submit="postComment">
            <input value="{{ $data['post']->id }}" wire:model="post_id" type="hidden" />
            <input style="width: 90%;" value="" wire:model="title" type="text" placeholder="Write Comment" />

            <button type="submit">Save</button>
        </form>

    </div>
</div>
