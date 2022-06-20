<?php

$input_user = '<p>This text in the tag p</p> <!-- Comment --> <a href = "#fragment">This text link to the website</a>';
echo strip_tags($input_user) . PHP_EOL;
echo strip_tags($input_user, "<a>") . PHP_EOL;
