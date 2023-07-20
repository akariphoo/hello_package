<?php

namespace Akp\Hello\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return view('hello::hello');
    }
}
