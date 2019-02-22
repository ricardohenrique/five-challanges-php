<?php

require_once __DIR__.'/Thesaurus.php';

final class ThesaurusTest extends \PHPUnit\Framework\TestCase
{
    /** @var Thesaurus */
    private $givenThesaurus;
    /** @var string */
    private $synonyms;
    /** @var object */
    private $synonymPayload;

    public function test_ThatGetSynonymsFindsMatches()
    {
        $this->givenThesaurus();

        $this->whenGetSynonym('big');

        $this->thenOnlyFound(2);
        $this->thenThisIsASynonym('great');
        $this->thenThisIsASynonym('large');
    }

    public function test_ThatGetSynonymsDealsWithNoMatches()
    {
        $this->givenThesaurus();

        $this->whenGetSynonym('foobar');

        $this->thenOnlyFound(0);
    }

    /**
     * @return Thesaurus
     */
    private function givenThesaurus()
    {
        $this->givenThesaurus = new Thesaurus(
            [
                "buy" => ["purchase"],
                "big" => ["great", "large"],
            ]
        );
    }

    /**
     * @param string $word
     */
    private function whenGetSynonym($word)
    {
        $this->synonyms = $this->givenThesaurus->getSynonyms($word);
        $this->assertJson($this->synonyms);
        $this->synonymPayload = json_decode($this->synonyms);

        $this->thenDataStructureIsCorrect();
        $this->assertThat($this->synonymPayload->word, $this->equalTo($word));
    }

    private function thenDataStructureIsCorrect()
    {
        $this->assertObjectHasAttribute('word', $this->synonymPayload);
        $this->assertObjectHasAttribute('synonyms', $this->synonymPayload);
    }

    /**
     * @param string $synonym
     */
    private function thenThisIsASynonym($synonym)
    {
        $foundSynonyms = $this->synonymPayload->synonyms;
        $this->assertThat($foundSynonyms, $this->contains($synonym));
    }

    /**
     * @param int $nMany
     */
    private function thenOnlyFound($nMany)
    {
        $this->assertCount($nMany, $this->synonymPayload->synonyms);
    }
}
