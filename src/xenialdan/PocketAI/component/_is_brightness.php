<?php

namespace xenialdan\PocketAI\component;

class _is_brightness extends BaseTest
{
    protected $name = "is_brightness";
    /** @var string $operator (Optional) The comparison to apply with 'value'. */
    public $operator = "equals";
    /** @var string $subject (Optional) The subject of this filter test. */
    public $subject = "self";
    /** @var float $value (Required) The brightness value to compare with. */
    public $value;


    /**
     * Tests the current brightness against a provided value in the range (0.0f, 1.0f).
     * _is_brightness constructor.
     * @param array $values
     */
    public function __construct(array $values = [])
    {
        $this->operator = $values['operator'] ?? $this->operator;
        $this->subject = $values['subject'] ?? $this->subject;
        $this->value = $values['value'] ?? $this->value;

    }

    public function test(): bool
    {
        // TODO: Implement test() method.
        return false;
    }
}