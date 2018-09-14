<?php

namespace xenialdan\PocketAI\component;

use pocketmine\entity\Entity;

class _is_altitude extends BaseTest
{
    protected $name = "is_altitude";
    /** @var string $operator (Optional) The comparison to apply with 'value'. */
    public $operator = "equals";
    /** @var string $subject (Optional) The subject of this filter test. */
    public $subject = "self";
    /** @var int $value (Required) The altitude value to compare with */
    public $value;

    /**
     * Tests the current altitude against a provided value. 0= bedrock elevation.
     * _is_altitude constructor.
     * @param array $values
     */
    public function __construct(array $values = [])
    {
        $this->operator = $values['operator'] ?? $this->operator;
        $this->subject = $values['subject'] ?? $this->subject;
        $this->value = $values['value'] ?? $this->value;

    }

    public function test(Entity $self, Entity $other): bool
    {
        // TODO: Implement test() method.
        return false;
    }
}