<?php

$fruit = ["orange", "apple", "banan", "lemon"];
sort($fruit, SORT_REGULAR); // Jika di var_dump hasinlnya type boolean sehingga untuk mendapatkan nilialnya harus dijalnakan diperulanagan foreach
foreach ($fruit as $key => $value) {
    echo "fruit[$key] = $value" . PHP_EOL;
}
