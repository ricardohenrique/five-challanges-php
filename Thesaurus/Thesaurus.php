<?php

class Thesaurus
{
    /**
     * @var array
     */
    private $thesaurus;

    /**
     * @param array $thesaurus
     */
    function __construct($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    /**
     * @param string $word
     */
    public function getSynonyms($word)
    {
    }
}