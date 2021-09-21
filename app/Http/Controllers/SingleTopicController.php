<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sTopic;

class SingleTopicController extends Controller
{
  public function showSingle(){
    $sTopic = sTopic::all();
    return view('singletopic', ['stopic' => $sTopic]);
  }
}
