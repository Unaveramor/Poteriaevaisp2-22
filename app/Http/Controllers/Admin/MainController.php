<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        // $tag = new Tag();
        // $tag->title = 'Привет, очередная проверка, когда ты уже закончишься';
        // $tag->save();
        return view('admin.index');
    }
}
