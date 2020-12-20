<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugas_pertama_tia extends Controller
{
    public function index(){
    $a=2;
    $b=2;
    $hasil = $a+$b;
    return "Penjumlahan antara ".$a." dengan ".$b." adalah ".$hasil;
    }
}
