<?php

namespace xenialdan\PocketAI\component;

use pocketmine\entity\Entity;
use pocketmine\Player;
use xenialdan\PocketAI\component\minecraft\_type_family;
use xenialdan\PocketAI\entitytype\AIEntity;

class _is_family extends BaseTest
{
    protected $name = "is_family";
    /** @var string $operator (Optional) The comparison to apply with 'value'. */
    public $operator = "equals";
    /** @var string $subject (Optional) The subject of this filter test. */
    public $subject = "self";
    /** @var string $value (Required) The Family name to look for */
    public $value;

    /**
     * Returns true when the subject entity is a member of the named family.
     * _is_family constructor.
     * @param array $values
     */
    public function __construct(array $values = [])
    {
        $this->operator = $values['operator'] ?? $this->operator;
        $this->subject = $values['subject'] ?? $this->subject;
        $this->value = $values['value'] ?? $this->value;

    }

    public function test(AIEntity $caller, Entity $other): bool
    {
        $return = parent::test($caller, $other);
        if (!$return) return $return;
        //TODO check vanilla entities?
        if ($this->subjectToTest instanceof Player && $this->value === "player") return true;//TODO check if Human are also allowed
        /** @var Components $components */
        $components = $caller->getEntityProperties()->findComponents("minecraft:type_family");
        /** @var _type_family $component */
        foreach ($components as $component) {
            if (is_array($component->family) && in_array($this->value, $component->family)) return true;
        }
        return false;
    }
}