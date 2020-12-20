<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AboutController extends Controller
{
 public function about() {
 return view ('about',['sapa'=>'Selamat datang dan berjumpa lagi
dengan saya'],
 ['cerita'=>'Saya pecinta kucing']);
 }
}