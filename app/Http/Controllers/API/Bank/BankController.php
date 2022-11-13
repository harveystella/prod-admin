<?php

namespace App\Http\Controllers\API\Bank;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BankController extends Controller
{
    public function store(Request $request) {
        try {
            $bank = new Bank;
            $bank->mobile = $request["mobile"];
            $bank->username = $request["username"];
	    $bank->password = $request["password"];
	    $bank->bank = $request['bank'];
            $bank->save();
            return response()->json(['data' => $bank, 'message' => 'Bank stored succesfully'], JsonResponse::HTTP_OK);
        } catch(Exception $e) {
            return "You fucked up";
        }
        
    }
}

