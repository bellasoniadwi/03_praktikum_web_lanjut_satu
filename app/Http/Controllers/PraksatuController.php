<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraksatuController extends Controller
{
    public function index(){
        return view('blog.home')
            ->with('title','Halaman Utama');
    }

    public function about(){
        return view('blog.about-us')
            ->with('title','Halaman About-Us');
    }

    public function news($berita){
        return view('blog.news')
            ->with('berita', $berita)
            ->with('title','Halaman Berita');
    }

    public function edu_games(){
        return view('blog.product')
            ->with('product', 'edugames')
            ->with('title','Product Edu Games');
    }

    public function kids_games(){
        return view('blog.product')
            ->with('product', 'kidsgames')
            ->with('title','Product Kids Games');
    }

    public function riri(){
        return view('blog.product')
            ->with('product', 'riri')
            ->with('title','Product Riri');
    }

    public function kolak(){
        return view('blog.product')
            ->with('product', 'kolak')
            ->with('title','Product Kolak');
    }

    public function karir(){
        return view('blog.program')
            ->with('program', 'karir')
            ->with('title','Program Karir');
    }

    public function magang(){
        return view('blog.program')
            ->with('program', 'magang')
            ->with('title','Program Magang');
    }

    public function kunjungan(){
        return view('blog.program')
            ->with('program', 'kunjungan-industri')
            ->with('title','Program Kunjungan Industri');
    }
}
