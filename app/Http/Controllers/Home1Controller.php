<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home() {
    return view ('uas');
   }
   public function fakta1()
   {
       return view ('faktakerinci');
   }
   public function jalurpendakian1()
   {
       return view ('jalurpendakiankerinci');
   }
//2
   public function fakta2()
   {
       return view ('faktasemeru');
   }
   public function jalurpendakian2()
   {
       return view ('jalurpendakiansemeru');
   }
//3
   public function fakta3()
   {
       return view ('faktarinjani');
   }
   public function jalurpendakian3()
   {
       return view ('jalurpendakianrinjani');
   }
//4
   public function fakta4()
   {
       return view ('faktabukit');
   }
   public function jalurpendakian4()
   {
       return view ('jalurpendakianbukit');
   }
//5
   public function fakta5()
   {
       return view ('faktalatimojong');
   }
   public function jalurpendakian5()
   {
       return view ('jalurpendakianlati');
   }
//6
   public function fakta6()
   {
       return view ('faktarbinaya');
   }
   public function jalurpendakian6()
   {
       return view ('jalurpendakianbinaya');
   }
//7
   public function fakta7()
   {
       return view ('faktapyramid');
   }
   public function jalurpendakian7()
   {
       return view ('jalurpendakianpyramid');
   }
  
}

