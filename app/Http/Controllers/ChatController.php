<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AIService;

class ChatController extends Controller
{
    public function chat(Request $request, AIService $aiService)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $locale = app()->getLocale();

        $reply = $aiService->generateResponse(
            $request->message,
            $locale
        );

        return response()->json([
            'reply' => $reply
        ]);
    }
}



