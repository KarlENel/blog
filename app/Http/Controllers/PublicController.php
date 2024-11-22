<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PublicController extends Controller
{
    public function index(){
        return view('index');
    }

    public function page1(){
        return view('page1');
    }

    public function page2(){
        return view('page2');
    }

    public function post(Post $post){
        return view('post',
        compact('post'));
    }
}
