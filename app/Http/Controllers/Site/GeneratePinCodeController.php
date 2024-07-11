<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\PinCode\StoreRequest;
use Illuminate\Http\Request;

class GeneratePinCodeController extends Controller
{
    private $lengthPinCode;
    private $digits = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];

    public function index()
    {
        return view('site.generatepincodeindex');
    }

    public function generate(Request $request, StoreRequest $storeRequest)
    {
        $pinCode = ' ';
        $this->lengthPinCode = $request->input('lengthPinCode');
        $storeRequest = $storeRequest->validated($this->lengthPinCode);
        
        for($i = 0; $i < $this->lengthPinCode; $i++) {
            $index = rand(0, count($this->digits) - 1);
            $pinCode .= $this->digits[$index];
        }

        return view('site.generatepincodeready', compact('pinCode'));
    }
}
