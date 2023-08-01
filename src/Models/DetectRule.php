<?php

namespace App\Models;
use Pkly\I18Next\I18n;
/**
 * DetectLog Model
 */
class DetectRule extends Model
{
    protected $connection = 'default';

    protected $table = 'detect_list';

    /**
     * 规则类型
     */
    public function type(): string
    {
        return $this->type == 1 ? i18n::get()->t('packet plaintext match') : i18n::get()->t('packet hex match');
    }

    public function show(): string
    {
        switch ($this->show) {
            case 0:
                $status = '<div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="" id="ban_rule_status'.$this->id.'" onclick="updateRuleStatus('.$this->id.', 1)" />
                            </div>';
                break;
            case 1:
                $status = '<div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="" id="ban_rule_status_'.$this->id.'" checked="checked" onclick="updateRuleStatus('.$this->id.', 0)" />
                            </div>';
                break;

        }

        return $status;
    }

    public function node(): array
    {
        $node_ids = json_decode($this->node_id, true);
        $node_name = [];
        foreach ($node_ids as $value) {
            $node = Node::find($value);
            if (!is_null($node)){
                $node_name[] = $node->name;
            } else {
                $node_name[] = '全部';
            }
        }
        return $node_name;
    }
}