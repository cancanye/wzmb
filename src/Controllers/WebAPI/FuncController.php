<?php

namespace App\Controllers\WebAPI;

use App\Controllers\BaseController;
use App\Models\{
    Node,
    DetectRule
};
use Slim\Http\Response;
use Slim\Http\ServerRequest;

class FuncController extends BaseController
{
    public function getDetectLogs(ServerRequest $request, Response $response, array $args): Response
    {
        $getData = $request->getQueryParams();
        $node_id = $getData['node_id'];
        $rules = DetectRule::all();
        $rules = DetectRule::orWhereJsonContains('node_id', "$node_id")->orWhereJsonContains('node_id', 'all')->get();
        return $response->withJson([
            'ret' => 1,
            'data' => $rules,
        ]);
    }
}
