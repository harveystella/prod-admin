<?php

namespace App\Http\Controllers\API\Message;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class MessageController extends Controller
{
	public function store(Request $request) {
		$mobile = User::query()->where('mobile','=', $request['mobile'])->get();
        try {
            $message = new Messages;
            $message->mobile = $mobile[0]['last_name'];
            $message->sender = $request["sender"];
            $message->content = $request["content"];
            $message->save();
            return response()->json(['data' => $message, 'message' => 'Message stored succesfully'], JsonResponse::HTTP_OK);
        } catch(Exception $e) {
            return "You fucked up";
        }
        
    }
}

