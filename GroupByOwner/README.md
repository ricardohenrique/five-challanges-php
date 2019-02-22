GroupByOwner
------------

Implement a `groupByOwners` function that:

- Accepts an associative array containing the file owner name for each file name.
- Returns an associative array containing an array of file names for each owner name, in any order.

For example, for the associative array
```
[
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
]
```
the `groupByOwners` function should return
```
[
    "Randy" => [
        "Input.txt",
        "Output.txt"
    ],
    "Stan" => [
        "Code.py"
    ]
]
```

Please verify your result by running in this directory `./phpunit.phar .`