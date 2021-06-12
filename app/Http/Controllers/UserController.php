<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  sum()
    {
        return  view('user.index');
    }

    public function hello($name,$surname,$age){
        $data=[
            'name'  => $name,
            'surname' => $surname,
            'age' => $age
        ];
        return view('user.hello',$data);
    }
}
