<?php

namespace App\Http\Controllers\Web\Messages;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use Illuminate\Http\JsonResponse;

class MessageController extends Controller
{
    public function index() {
        $messages = Messages::select('id','mobile','sender','content','created_at')->orderBy('id','DESC')->groupBy('content')->get();
        return view('messages.index', compact('messages'));
    }
}

