<?php

namespace App\Controllers\Admin;

use App\Models\AccessLog;
use App\Models\User;
use App\Models\Node;
use App\Controllers\AdminController;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

class AccessLogController extends AdminController
{
    public function accessLogIndex(ServerRequest $request, Response $response, array $args): Response 
    {
        $table_config['total_column'] = [
            
            'id'      => 'ID',
            'user'    => '用户',
            'node'    => '节点',
            'type'    => '类型',
            'address' => '地址',
            'date'    => '时间',
        ];

        $table_config['ajax_url'] = 'access_log/ajax';
        $nodes = Node::all();
        $users = User::all();
        $this->view()
            ->assign('table_config', $table_config)
            ->assign('users', $users)
            ->assign('nodes', $nodes)
            ->display('admin/access_log.tpl');
        return $response;
    }

    public function accessLogAjax(ServerRequest $request, Response $response, array $args): Response
    {
        $query = AccessLog::getTableDataFromAdmin(
            $request
        );

        $data = $query['datas']->map(function($rowData) {
            return [
                'id'      => $rowData->id,
                'user'    => $rowData->user_email,
                'node'    => $rowData->node_name,
                'type'    => $rowData->type,
                'address' => $rowData->address,
                'date'    => date('Y-m-d H:i:s', $rowData->created_at),
            ];
        })->toArray();

        return $response->withJson([
            'draw'            => $request->getParsedBodyParam('draw'),
            'recordsTotal'    => AccessLog::count(),
            'recordsFiltered' => $query['count'],
            'data'            => $data,
        ]);
    }
}