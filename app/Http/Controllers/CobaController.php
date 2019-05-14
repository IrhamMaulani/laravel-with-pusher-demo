<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Laravel\Facades\Pusher;

class CobaController extends Controller
{
    public function index(){

        $message = "aaaaaa";

        Pusher::trigger('my-channel', 'my-event', ['message' => $message]);

        Pusher::getSettings();

        return view('success');
    }
}