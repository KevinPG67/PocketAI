<?php

namespace xenialdan\PocketAI\component\minecraft\movement;

use xenialdan\PocketAI\entitytype\AIEntity;
use xenialdan\PocketAI\entitytype\AIProjectile;

class _basic extends MovementComponent
{
    protected $name = "minecraft:movement.basic";
    /** @var float $max_turn The maximum number in degrees the mob can turn per tick. */
    public $max_turn = 30.0;

    /**
     * This component accents the movement of an entity.
     * _basic constructor.
     * @param array $values
     */
    public function __construct(array $values = [])
    {
        $this->max_turn = $values['max_turn'] ?? $this->max_turn;
        parent::__construct($values);

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
