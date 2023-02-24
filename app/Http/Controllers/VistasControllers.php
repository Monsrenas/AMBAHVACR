<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class VistasControllers extends Controller
{
    
   public function modalview(Request $request)
    {    
        $view = View::make($request->url);
        return $view;
    }
}
