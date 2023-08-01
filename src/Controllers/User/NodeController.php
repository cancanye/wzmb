<?php

namespace App\Controllers\User;

use App\Controllers\UserController;
use App\Models\{
    Node,
    User,
    Ann,
    NodeClassification,
    Setting
};
use App\Utils\{
    URL,
};
use Slim\Http\Response;
use Slim\Http\ServerRequest;

class NodeController extends UserController
{
    public function nodeIndex(ServerRequest $request, Response $response, array $args)
    {
        $user        = $this->user;
        //$user_group = ($user->node_group != 0 ? [0, $user->node_group] : [0]);
        if (!$user->is_admin) {
            $servers = Node::where('status' ,1)
            ->whereJsonContains('node_group', "$user->node_group")
            ->orderBy('name', 'asc')
            ->get();
        } else if ($user->is_admin) {
            $servers = Node::where('status' ,1)
            ->orderBy('name', 'asc')
            ->get();
        }

        $class = Node::select('node_class')
        ->orderBy('node_class', 'asc')
        ->distinct()
        ->get();
        if (!$class->isEmpty()) {
            $min_node_class = min($class->toArray())['node_class'];
        } else {
            $min_node_class = 0;
        }
        $classifications = NodeClassification::orderBy('sort', 'desc')->get();
        $firstShow = NodeClassification::orderBy('sort', 'desc')->first()->value('sort');
        $this->view()
            ->assign('class', $class)
            ->assign('classifications', $classifications)
            ->assign('firstShow', $firstShow)
            ->assign('servers', $servers)
            ->assign('min_node_class', $min_node_class)
            ->registerClass('URL', URL::class)
            ->display('user/node.tpl');
        return $response;
    }
}