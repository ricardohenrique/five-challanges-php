<?php

require_once __DIR__ . '/Palindrome.php';

use PHPUnit\Framework\TestCase;

final class PalindromeTest extends TestCase {
    public function test_ThatWordIsTrue()
    {
        $this->assertStringIsPalindrome('Deleveled');
    }

    public function test_ThatSentenceIsTrue()
    {
        $this->assertStringIsPalindrome('A Santa Lived As a Devil At NASA');
    }

    public function test_ThatWrongPath()
    {
        $word = 'FooBarBak';
        $this->assertThat(Palindrome::isPalindrome($word), $this->isFalse(),
            "'$word' is not recognized as palindrome.");
    }

    /**
     * @param string $word
     */
    private function assertStringIsPalindrome($word)
    {
        $this->assertThat(Palindrome::isPalindrome($word), $this->isTrue(),
            "'$word' is not recognized as palindrome.");
    }
}