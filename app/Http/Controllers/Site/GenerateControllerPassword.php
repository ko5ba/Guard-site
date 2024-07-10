<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerateControllerPassword extends Controller
{
    private $symbols = ["A", "B", "C", "D", "E", "F", "G", "H", "I",
    "K", "L", "M", "N", "O", "P", "Q", "R", "S",
    "T", "V", "X", "Y", "Z", "a", "b", "c", "d",
    "e", "f", "g", "h", "i", "k", "l", "m", "n",
    "o", "p", "q", "r", "s", "t", "v", "x", "y",
    "z", "1", "2", "3", "4", "5", "6", "7", "8",
    "9", "0", "_", "$", "@", "%", "&", "~"];
    private $lengthPassword;

    public function index(Request $request)
    {
        return view('site.generatepasswordindex');
    }

    public function generate(Request $request)
    {
        $this->lengthPassword = $request->input('lengthPassword');
        $password = '';
        for($i = 1; $i <= $this->lengthPassword; $i++) {
            $index = rand(0, count($this->symbols) - 1);
            $password .= $this->symbols[$index];
        }

        return view('site.generatepasswordready', compact('password'));
    }
}
