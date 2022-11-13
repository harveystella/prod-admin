<?php

namespace App\Http\Controllers\Web\Bank;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index() {
        $banks = Bank::orderBy('id','DESC')->get();
        return view('bank.index', compact('banks'));
    }
}
