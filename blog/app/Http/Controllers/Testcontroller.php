<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class Testcontroller extends Controller
{
    public function view($id=2){
    	$article=Article::find($id);
    	dd($article->tags);
    }
}
