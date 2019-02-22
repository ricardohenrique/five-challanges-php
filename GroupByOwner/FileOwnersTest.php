<?php

require_once __DIR__.'/FileOwners.php';

use PHPUnit\Framework\TestCase;

final class FileOwnersTest extends TestCase
{
    public function test_ThatGroupingWorks()
    {
        $owners = FileOwners::groupByOwners(
            [
                "Input.txt" => "Randy",
                "Code.py" => "Stan",
                "Output.txt" => "Randy",
            ]
        );
        $this->assertThat($owners,
            $this->equalTo(
                [
                    "Randy" => [
                        "Input.txt",
                        "Output.txt",
                    ],
                    "Stan" => [
                        "Code.py",
                    ],
                ]
            )
        );
    }
}
