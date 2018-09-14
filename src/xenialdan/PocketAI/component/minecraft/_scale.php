<?php

namespace xenialdan\PocketAI\component\minecraft;

use xenialdan\PocketAI\component\BaseComponent;
use xenialdan\PocketAI\entitytype\AIEntity;
use xenialdan\PocketAI\entitytype\AIProjectile;

class _scale extends BaseComponent
{
    protected $name = "minecraft:scale";
    /** @var float $value The value of the scale. 1.0 means the entity will appear at the scale they are defined in their model. Higher numbers make the entity bigger */
    public $value = 1.0;

    /**
     * Sets the entity's visual size.
     * _scale constructor.
     * @param array $values
     */
    public function __construct(array $values = [])
    {
        $this->value = $values['value'] ?? $this->value;

    }

    /**
     * Applies the changes to the mob
     * @param AIEntity|AIProjectile $entity
     */
    public function apply($entity): void
    {
        $entity->setScale($this->value);
    }

    /**
     * Removes the changes from the mob
     * @param AIEntity|AIProjectile $entity
     */
    public function remove($entity): void
    {
        $c = new self;
        $entity->setScale($c->value);
    }
}
