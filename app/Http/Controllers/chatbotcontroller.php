<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function handle(Request $request)
    {
        $userMessage = $request->input('message');

        $botpressUrl = env('BOTPRESS_URL', 'http://localhost:3000');
        $botId = env('BOTPRESS_BOT_ID', 'gmu-department-of-ds');
        $userId = 'user_' . session()->getId(); // unique per user/session

        try {
            $response = Http::post(
                "{$botpressUrl}/api/v1/bots/{$botId}/converse/{$userId}",
                [
                    'type' => 'text',
                    'text' => $userMessage,
                ]
            );

            $body = $response->json();

            // Collect bot responses
            $reply = '';
            if (isset($body['responses']) && is_array($body['responses'])) {
                foreach ($body['responses'] as $res) {
                    if (isset($res['text'])) {
                        $reply .= $res['text'] . " ";
                    }
                }
            }

            $reply = trim($reply) ?: 'Sorry, I could not generate an answer right now.';

            return response()->json(['reply' => $reply]);

        } catch (\Exception $e) {
            logger()->error('Botpress error: ' . $e->getMessage());
            return response()->json(['reply' => 'Sorry, the chatbot service is temporarily unavailable.']);
        }
    }
}
