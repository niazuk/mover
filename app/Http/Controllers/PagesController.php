<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
	public function sitemap()
	{
    //$posts = Post::where('visible', 1)->orderBy('updated_at', 'DESC')->get();
		return response()->view('pages.sitemap')->header('Content-Type', 'text/xml');
	}
}
