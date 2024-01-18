<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    public function __construct()
    {
        // Closure as callback
//        $this->beforeFilter(function(){
//            if(!Auth::check()) {
//                return 'no';
//            }
//        });

        // or register filter name
        // $this->beforeFilter('auth');
        //
        // and place this to app/filters.php
        // Route::filter('auth', function()
        // {
        //  if(!Auth::check()) {
        //      return 'no';
        //  }
        // });
    }
}
