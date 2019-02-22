<?php

require_once __DIR__.'/BinaryTree.php';

class BinaryTreeTest extends \PHPUnit\Framework\TestCase
{
    /** @var BinaryNode */
    private $givenTree;
    /** @var BinaryNode */
    private $invertedTree;

    public function testInvertOnBalancedTrees()
    {
        $this->givenBalancedTree();
        $this->whenInvertingTree();
        $this->thenBalancedTreeIsInverted();
    }

    public function testInvertOnImbalancedTrees()
    {
        $this->givenImbalancedTree();
        $this->whenInvertingTree();
        $this->thenImbalancedTreeIsInverted();
    }

    private function whenInvertingTree()
    {
        $this->invertedTree = BinaryTree::invert($this->givenTree);
    }

    private function givenBalancedTree()
    {
        $root = new BinaryNode(1);

        $root->left = new BinaryNode(2);
        $root->right = new BinaryNode(3);

        $root->left->left = new BinaryNode(4);
        $root->left->right = new BinaryNode(5);

        $root->right->left = new BinaryNode(6);
        $root->right->right = new BinaryNode(7);

        $this->givenTree = $root;
    }

    private function thenBalancedTreeIsInverted()
    {
        $this->assertEquals($this->invertedTree->value, 1);
        $this->assertEquals($this->invertedTree->left->value, 3);
        $this->assertEquals($this->invertedTree->right->value, 2);
        $this->assertEquals($this->invertedTree->left->left->value, 7);
        $this->assertEquals($this->invertedTree->left->right->value, 6);
        $this->assertEquals($this->invertedTree->right->left->value, 5);
        $this->assertEquals($this->invertedTree->right->right->value, 4);
    }

    private function givenImbalancedTree()
    {
        $root = new BinaryNode(1);

        $root->left = new BinaryNode(2);
        $root->right = new BinaryNode(3);

        $root->right->left = new BinaryNode(6);
        $root->right->right = new BinaryNode(7);

        $root->right->right->right = new BinaryNode(9);

        $this->givenTree = $root;
    }

    private function thenImbalancedTreeIsInverted()
    {
        $this->assertEquals($this->invertedTree->value, 1);
        $this->assertEquals($this->invertedTree->left->value, 3);
        $this->assertEquals($this->invertedTree->right->value, 2);
        $this->assertEquals($this->invertedTree->left->left->value, 7);
        $this->assertEquals($this->invertedTree->left->right->value, 6);
        $this->assertEquals($this->invertedTree->left->left->left->value, 9);
    }
}