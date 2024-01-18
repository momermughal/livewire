<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends BaseController
{
    private $view_point;

    public function __construct()
    {
        parent::__construct();
        $this->view_point = 'backend.post.';
    }

    public function index()
    {
        return view($this->view_point . 'index');
    }

//    public function view()
//    {
//        return view($this->view_point . 'view');
//    }
}
