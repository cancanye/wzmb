<?php

namespace App\Models;

class AccessLog extends Model
{
    protected $connection = "default";

    protected $table = "user_access";

    public function nodeName(): string
    {
        $node = Node::find($this->node_id);
        return $node->name;
    }

    public function UserEmail(): string
    {
        $user = User::find($this->user_id);
        return $user->email;
    }
}