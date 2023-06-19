<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function store(Request $request){
        /**
        $id = 'token' . date("s");
        $request->session()->put($id, "I love codegym!" . $id);
        echo 'store session';

         */
        // session()->reflash();
        session()->flash("flash_key", 'Hello flash session');

        $request->session()->forget('flash_key');
        
        echo 'store session';

    }
    function view(Request $request){
        echo $request->session()->get('flash_key', 'Bi Xoa roi');
    }
}
