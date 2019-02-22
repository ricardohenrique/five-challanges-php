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
        if($root === null) {
            return null;
        } 

        $bkpLeft = $root->left;
        $root->left = self::invert($root->right);
        $root->right = self::invert($bkpLeft);

        return $root;
    }
}

// $root = new BinaryNode(1);

// $root->left = new BinaryNode(2);
// $root->right = new BinaryNode(3);

// $root->left->left = new BinaryNode(4);
// $root->left->right = new BinaryNode(5);

// $root->right->left = new BinaryNode(6);
// $root->right->right = new BinaryNode(7);

// $givenTree = $root;
// $invertedTree = BinaryTree::invert($givenTree);
// var_dump($invertedTree);