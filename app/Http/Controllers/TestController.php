<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function test() {

        // $data['name'] = 'Laravel Blog';
        // return view('test', $data);

        return view('test', ['name'=>'Hello World'] );
    }

}
