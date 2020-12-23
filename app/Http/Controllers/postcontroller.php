<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function index($id){
	$post=\DB::table('posts')->where('id',$id)->first();
	$data=[
	'post'=>$post
	];
	
return view('posts.posts',$data);
}
}
