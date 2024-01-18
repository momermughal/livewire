<?php

namespace App\Livewire\post;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Post as PostModel;

class Post extends Component
{
    protected $data = [];
    protected $_viewPoint = 'livewire.post.';
    protected $_action = '';

    public $title = '';
    public $post_id = '';

    public function deletePost($id)
    {
        PostModel::find($id)->delete();
        return redirect()->to('/posts');
    }

    public function postComment($id)
    {
//        dd($id);
        Comment::create([
            'body' => $this->title,
            'post_id' => $id,
            'user_id' => Auth::id(),
                ]);
        $this->viewPost($id, 'view');
    }

    public function viewPost($id, $action)
    {
        $this->data['post'] =  PostModel::with(['user', 'comments' => function ($query) {
            $query->orderBy('created_at', 'DESC');
        }] )->find($id);
        $this->_action = $action;
    }

    private function getPosts()
    {
        $this->data['posts'] = PostModel::with(['user'])->get();
    }

    public function render()
    {
        if ($this->_action === 'view')return view($this->_viewPoint . 'view', ['data' => $this->data]);
        $this->getPosts();
        return view($this->_viewPoint . 'post', ['data' => $this->data]);
    }
}
