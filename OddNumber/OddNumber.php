<?php

class OddNumber
{
    /**
     * @var int[]
     */
    private $numbers;

    /**
     * @param array $numbers
     */
    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * @return int
     * @throws Exception
     */
    public function find()
    {
        $countValues = array_count_values($this->numbers);
        $countCount = array_count_values($countValues);

        foreach ($countCount as $key => $value) {
            if($value === 1) {
                $get = array_search($key, $countValues);
                return $get;
            }
        }

        throw new Exception();
    }
}

// $odd = new OddNumber([2, 5, 9, 1, 5, 1, 8, 2, 8]);
// $odd = new OddNumber([2, 3, 3, 1, 4, 5, 4, 1, 4, 2, 5]);
// $return = $odd->find();

// var_dump($return);