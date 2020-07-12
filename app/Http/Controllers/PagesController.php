<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $names = [
            ['firstName' => 'Amir', 'lastName' => 'Salehi', 'age' => 26],
            ['firstName' => 'Sara', 'lastName' => 'Razavi', 'age' => 24],
            ['firstName' => 'Erfan', 'lastName' => 'Javadi', 'age' => 32],
        ];
        return view('welcome', compact('names'));
    }

    public function about(){
        return view('pages/about');
    }

    public function contact(){
        return view('pages/contact');
    }
}
