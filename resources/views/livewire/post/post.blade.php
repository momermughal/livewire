<div>
{{--    {{ dd($data) }}--}}
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Title </th>
                <th class="th-sm">Post </th>
                <th class="th-sm">User Name </th>
                <th class="th-sm">Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['posts'] as $post)
                <tr>
                    <td style="text-align: center;"> {{ ($post->title) ?? '' }} </td>
                    <td style="text-align: center;"> {{ ($post->body) ?? '' }} </td>
                    <td style="text-align: center;"> {{ ($post->user['name']) ?? '' }} </td>
                    <td style="text-align: center;">
                        <button wire:click="viewPost({{ $post->id }}, 'view')">
                            View
                        </button>
                        <button wire:click="deletePost({{ $post->id }})">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>

    </script>
</div>
