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
        $data['word'] = $word;
        $data['synonyms'] = [];

        if (array_key_exists($word, $this->thesaurus)) {
            $data['synonyms'] = $this->thesaurus[$word];
        }
        return json_encode($data);
    }
}

// $givenThesaurus = new Thesaurus(
//     [
//         "buy" => ["purchase"],
//         "big" => ["great", "large"],
//     ]
// );
// $return = $givenThesaurus->getSynonyms('big');
// var_dump($return);