<?php

namespace App\Controllers\User;

use App\Controllers\UserController;
use Slim\Http\Response;
use Slim\Http\ServerRequest;
use App\Models\UserMessage;
use App\Models\Message;

class ReadMessageController extends UserController
{
    public function readMessage(ServerRequest $request, Response $response, array $args): Response
    {
        $id = $request->getParsedBodyParam('id');
        $message = Message::find($id);
        $message->is_read = 1;
        $message->save();
        return $response->withJson([
            'ret' => 1,
            'msg' => '成功'
        ]);
    }

    public function readAllMessage(ServerRequest $request, Response $response, array $args): Response
    {
        $messages = Message::where('user_id', $this->user->id)->where('is_read', 0)->get();
        foreach ($messages as $message) {
            $message->is_read = 1;
            $message->save();
        }
        return $response->withJson([
            'ret'   =>  1,
            'msg'   =>  '成功'
        ]);
    }
}