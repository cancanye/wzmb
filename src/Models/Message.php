<?php

namespace App\Models;

class Message extends Model
{
    protected $connection = 'default';
    protected $table = 'message';

    public static function createMessage($user_id, $contents): void
    {
        $message = new Message();
        $message->user_id = $user_id;
        $message->contents = $contents;
        $message->is_read = 0;
        $message->created_at = time();
        $message->updated_at = time();
        $message->save();
    }
}