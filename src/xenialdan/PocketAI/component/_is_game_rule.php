<?php

namespace xenialdan\PocketAI\component;

use xenialdan\PocketAI\entitytype\AIEntity;
use xenialdan\PocketAI\entitytype\AIProjectile;

class _is_game_rule extends BaseComponent
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

    /**
     * Applies the changes to the mob
     * @param AIEntity|AIProjectile $entity
     */
    public function apply($entity): void
    {
        // TODO: Implement apply() method.
    }

    /**
     * Removes the changes from the mob
     * @param AIEntity|AIProjectile $entity
     */
    public function remove($entity): void
    {
        // TODO: Implement remove() method.
    }
}
