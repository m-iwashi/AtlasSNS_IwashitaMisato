<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;

class PostsController extends Controller
{
    //
    public function index(){
        //viewを表示してください(viewのpostsフォルダのindex.blade.php)階層構造
        return view('posts.index');
    }
}
