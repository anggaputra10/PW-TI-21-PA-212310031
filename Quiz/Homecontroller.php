<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('home');
    }

    public function quiz2(){
        return 'fkashdfksj';
    }
    public function index2(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310025;
        $students[] = array("npm"=>212310031, "name"=>"Angga Putra Andika", "gender"=>"M", "alamat"=>"Kedung Badak");
        $students[] = array("npm"=>212310001, "name"=>"Frila Cahya Wardani", "gender"=>"F", "alamat"=>"Cipaku");
        $students[] = array("npm"=>212310023, "name"=>"Bagas Banuwasito", "gender"=>"M", "alamat"=>"Cogreg");
        $students[] = array("npm"=>212310025, "name"=>"Teddy Syahputra", "gender"=>"M", "alamat"=>"Jalan Roda");
        $students[] = array("npm"=>212310091, "name"=>"Cindy Kevina", "gender"=>"F", "alamat"=>"Sukasari");
        $data['students'] = $students;
        return view('home')->with("data",$data);
    }
}
