<?php

//phpinfo();

require_once __DIR__ . '/../src/Header.php';
require_once __DIR__ . '/../src/Footer.php';

$header = new Header();
echo $header->getHeader();

// multiple statements for testing single step debugging
$greet = 'Hello';
$greet .= ' World!';

printf( "      %s\n", $greet );

echo ( new Footer() )->getFooter();