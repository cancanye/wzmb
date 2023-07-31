<?php

namespace App\Controllers\Admin;

use App\Controllers\AdminController;
use App\Models\Message;
use App\Models\User;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

class MessageController extends AdminController
{
    public function messageIndex(ServerRequest $request, Response $response, array $args): Response
    {
        $table_config['total_column'] = [
            'id'         => 'ID',
            'user_id'    => '用户',
            'contents'    => '内容',
            'updated_at' => '日期',
            'is_read'    => '状态',
            'action'     => '操作',
        ];
        
        $table_config['ajax_url'] = 'message/ajax';
        $messageUsers = User::all();
        $this->view()
            ->assign('table_config', $table_config)
            ->assign('messageUsers', $messageUsers)
            ->display('admin/message.tpl');
        return $response;
    }

    public function createMessage(ServerRequest $request, Response $response, array $args): Response
    {
        $contents = $request->getParsedBodyParam('contents');
        $user_ids = $request->getParsedBodyParam('user_id');
        foreach ($user_ids as $user_id) {
            $message = new Message();
            $message->contents = $contents;
            $message->user_id = $user_id;
            $message->created_at = time();
            $message->updated_at = time();
            $message->save();
        }
        return $response->withJson([
            'ret' => 1,
            'msg' => '成功'
        ]);
    }

    public function updateMessage(ServerRequest $request, Response $response, array $args): Response
    {
        $id = $request->getParsedBodyParam('id');
        $contents = $request->getParsedBodyParam('contents');
        $message = Message::find($id);
        $message->contents = $contents;
        $message->udpated_at = time();
        $message->save();
        return $response->withJson([
            'ret'   =>  1,
            'msg'   =>  '成功'
        ]);
    }

    public function deleteMessage(ServerRequest $request, Response $response, array $args): Response
    {
        $id = $request->getParsedBodyParam('id');
        $message = Message::find($id);
        $message->delete();
        return $response->withJson([
            'ret'   =>  1,
            'msg'   =>  '成功'
        ]);
    }

    public function requestMessage(ServerRequest $request, Response $response, array $args): Response
    {
        $id = $request->getParsedBodyParam('id');
        $message = Message::find($id);
        $config = [
            'contents' => $message->contents,
        ];

        return $response->withJson($config);
    }

    public function messageAjax(ServerRequest $request, Response $response, array $args): Response
    {
        $query = Message::getTableDataFromAdmin(
            $request,
            static function (&$order_field) {
                if (in_array($order_field, ['action'])) {
                    $order_field = 'id';
                }
            }
        );

        $data = $query['datas']->map(function($rowData) {
            return [
                'id'         => $rowData->id,
                'user_id'    => $rowData->user_id,
                'contents'    => $rowData->contents,
                'updated_at' => date('Y-m-d H:i:s', $rowData->updated_at),
                'is_read'    => $rowData->is_read ? '已读' : '未读',
                'action'     => '<div class="btn-group dropstart"><a class="btn btn-light-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">操作</a>
                                    <ul    class = "dropdown-menu">
                                    <li><a class = "dropdown-item" type = "button" onclick = "zeroAdminDelete(\'message\', ' . $rowData->id . ')">删除</a></li>
                                    </ul>
                                </div>',
            ];
        })->toArray();

        return $response->withJson([
            'draw'            => $request->getParsedBodyParam('draw'),
            'recordsTotal'    => Message::count(),
            'recordsFiltered' => $query['count'],
            'data'            => $data,
        ]);
    }
}