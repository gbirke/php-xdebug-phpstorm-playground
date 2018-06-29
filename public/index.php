<?php

include __DIR__ . '/../src/header.php';

// multiple statements for testing single step debugging
$greet = 'Hello';
$greet .= ' Wosrld!';

printf( "      %s\n", $greet );

include __DIR__ . '/../src/footer.php';