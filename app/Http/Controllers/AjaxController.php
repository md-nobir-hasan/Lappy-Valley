<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
   public function cartStore(Request $request){
    return response($request->all());
   }
}
