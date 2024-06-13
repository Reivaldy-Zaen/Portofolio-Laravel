<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoController extends Controller
{
        public function index()
        {
            return view('home');
        }
        public function porto()
        {
            return view('porto');
        }
        public function kontak()
        {
            return view('kontak');
        }
}
