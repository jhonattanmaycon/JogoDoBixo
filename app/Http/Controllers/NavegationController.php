<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegationController extends Controller
{
public function home()
   {
       return view('welcome');
   }
public function petmart()
   {
       return view('petmart');
   }
public function about()
   {
       return view('about');
   }
public function blog()
   {
       return view('blog');
   }
public function petguide()
   {
       return view('petguide');
   }
public function contact()
   {
       return view('contact');
   }
}
