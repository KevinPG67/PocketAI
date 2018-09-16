<?php

namespace xenialdan\PocketAI\filter;

use pocketmine\entity\Entity;
use xenialdan\PocketAI\entitytype\AIEntity;

class _is_game_rule extends BaseFilter
{
    protected $name = "is_game_rule";
    /** @var string $domain (Required) The Game Rule to test. */
    public $domain;
    /** @var string $operator (Optional) The comparison to apply with 'value'. */
    public $operator = "equals";
    /** @var string $subject (Optional) The subject of this filter test. */
    public $subject = "self";
    /** @var bool $value (Optional) true or false. */
    public $value = true;

    /**
     * Tests whether a named game rule is active.
     * _is_game_rule constructor.
     * @param array $values
     */
    public function __construct(array $values = [])
    {
        $this->domain = $values['domain'] ?? $this->domain;
        $this->operator = $values['operator'] ?? $this->operator;
        $this->subject = $values['subject'] ?? $this->subject;
        $this->value = $values['value'] ?? $this->value;

    }

    public function test(AIEntity $caller, Entity $other): bool
    {
        $return = parent::test($caller, $other);
        if (!$return) return $return;
        // TODO: Implement test() method.
        return false;
    }
}