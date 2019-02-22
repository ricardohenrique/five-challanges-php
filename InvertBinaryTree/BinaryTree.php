<?php

/**
 * leaf data structure
 */
class BinaryNode
{
    /** @var mixed null  */
    public $value = null;
    /** @var BinaryNode null  */
    public $left = null;
    /** @var BinaryNode null  */
    public $right = null;

    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
}

class BinaryTree
{
    /**
     * @param BinaryNode $root
     * @return BinaryNode
     */
    public static function invert($root)
    {
    }
}