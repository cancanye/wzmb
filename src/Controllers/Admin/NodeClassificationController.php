<?php

namespace App\Controllers\Admin;

use App\Controllers\AdminController;
use App\Models\NodeClassification;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

final class NodeClassificationController extends AdminController
{
    public function nodeClassificationIndex(ServerRequest $request, Response $response, array $args): Response
    {
        $table_config['total_column'] = [
            'id'             => 'ID',
            'name'           => '名称',
            'classification' => '类别',
            'action'         => '操作',
        ];
        $table_config['ajax_url'] = 'node_classification/ajax';
        $this->view()
            ->assign('table_config', $table_config)
            ->display('admin/node_classification.tpl');
        return $response;
    }

    public function createNodeClassification(ServerRequest $request, Response $response, array $args): Response
    {
        $postData                       = $request->getParsedBody();
        $classification                 = new NodeClassification();
        $classification->name           = $postData['name'];
        $classification->classification = $postData['classification'];
        $classification->sort           = $postData['sort'];
        $classification->created_at     = time();
        $classification->updated_at     = time();

        $classification->save();

        return $response->withJson([
            'ret'   => 1,
            'msg'   => '成功'
        ]);
    }

    public function updateNodeClassification(ServerRequest $request, Response $response, array $args): Response
    {       
        $putData                        = $request->getParsedBody();
        $classification                 = NodeClassification::find($putData['id']);
        $classification->name           = $putData['name'];
        $classification->classification = $putData['classification'];
        $classification->sort           = $putData['sort'];
        $classification->updated_at     = time();
        $classification->save();

        return $response->withJson([
            'ret' => 1,
            'msg' => '成功'
        ]);
    }

    public function nodeClassificationAjax(ServerRequest $request, Response $response, array $args): Response
    {
        $query = NodeClassification::getTableDataFromAdmin(
            $request,
            static function (&$order_field) {
                if (in_array($order_field, ['name', 'classification'])) {
                    $order_field = 'id';
                }
            }
        );

        $data = $query['datas']->map(function($rowData) {
            return [
                'id'             => $rowData->id,
                'name'           => $rowData->name,
                'classification' => $rowData->classification,
                'action'         => '<div class="btn-group dropstart"><a class="btn btn-light-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">操作</a>
                                    <ul    class = "dropdown-menu">
                                    <li><a class = "dropdown-item" type = "button" onclick = "zeroAdminNodeClassificationGetInfo(' . $rowData->id . ')">编辑</a></li>
                                    <li><a class = "dropdown-item" type = "button" onclick = "zeroAdminDelete(\'node_classification\', ' . $rowData->id . ')">删除</a></li>
                                    </ul>
                                </div>',
            ];
        })->toArray();

        return $response->withJson([
            'draw'            => $request->getParsedBodyParam('draw'),
            'recordsTotal'    => NodeClassification::count(),
            'recordsFiltered' => $query['count'],
            'data'            => $data,
        ]);
    }

    public function deleteNodeClassification(ServerRequest $request, Response $response, array $args): Response
    {
        $id = $request->getParsedBodyParam('id');
        $classification = NodeClassification::find($id);
        $classification->delete();
        return $response->withJson([
            'ret' => 1,
            'msg' => '删除成功'
        ]);
    }

    public function getInfoNodeClassification(ServerRequest $request, Response $response, array $args): Response
    {
        $id = $request->getParsedBodyParam('id');
        $classification = NodeClassification::find($id);
        $data = [
            'name'           => $classification->name,
            'classification' => $classification->classification,
            'sort'           => $classification->sort,
        ];

        return $response->withJson($data);
    }
}