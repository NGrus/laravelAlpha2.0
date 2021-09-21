<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    public function showAll(){
      $topics = Topic::all();
      
      return view('index', ['topics' => $topics]);
    }
}
