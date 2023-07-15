<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use PhpParser\Node\Stmt\Return_;

class ChatbotController extends Controller
{
    public function sendChat(Request $request){
        $result =  OpenAI::completions()->create([
            'max_tokens' => 1000,
            'model'     => 'text-davinci-003',
            'prompt'    => $request->input
        ]);

        $response = array_reduce(
            $result->toArray()['choices'],
            fn(string $result, array $choice) => $result . $choice['text'], ""
        );

        return $response;
    }
}
