<?php

namespace App\Models;

/**
 * Ticket Model
 */
class Ticket extends Model
{
    protected $connection = 'default';

    protected $table = 'ticket';

    /**
     * 时间
     */
    public function datetime(): string
    {
        return date('Y-m-d H:i:s', $this->datetime);
    }

    /**
     * 用户
     */
    public function user(): ?User
    {
        return User::find($this->userid);
    }

    /**
     *用户邮箱
     */
    public function email(): string
    {
        if (is_null($this->user())) {
            return '用户已不存在';
        }
        return $this->user()->email;
    }

    /**
     * 工单状态
     */
    public function status()
    {
        switch ($this->status) {
            case '1': 
                $status = '<div class="badge font-weight-bold badge-light-success fs-6">活跃</div>';
                break;
            case '0':
                $status = '<div class="badge font-weight-bold badge-light fs-6">关闭</div>';
                break;
        }
        return $status;
    }
}