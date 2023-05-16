<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    // Home method
    public function Home() {
        return view('index');
    }

    // About method
    public function About() {
        return view('about');
    }

    // Contact method
    public function Contact() {
        return view('contact');
    }
}
