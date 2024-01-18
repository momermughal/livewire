<?php

namespace App\Livewire\post;

use App\Models\Comment;
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

    public function postComment()
    {
        Comment::create(
            $this->only(['title', 'content'])
        );

//        return redirect('/posts')
//            ->with('status', 'Post successfully created.');
    }

    public function viewPost($id, $action)
    {
        $this->data['post'] =  PostModel::with('user')->find($id);
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
