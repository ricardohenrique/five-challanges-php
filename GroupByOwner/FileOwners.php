<?php

class FileOwners
{
    /**
     * @param array $files
     * @return array
     */
    public static function groupByOwners($files)
    {
    	$data = [];
    	foreach ($files as $key => $value) {
    		$data[$value][] = $key;
    	}
    	return $data;
    }
}


// $owners = FileOwners::groupByOwners(
//             [
//                 "Input.txt" => "Randy",
//                 "Code.py" => "Stan",
//                 "Output.txt" => "Randy",
//             ]
//         );