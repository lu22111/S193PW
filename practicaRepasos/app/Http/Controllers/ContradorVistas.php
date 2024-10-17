<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContradorVistas extends Controller
{
  
    public function inicio(){
        return view('welcome');
    }

    public function repaso(){
        return view('Repaso');
}}
