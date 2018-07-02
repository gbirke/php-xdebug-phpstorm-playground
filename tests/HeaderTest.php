<?php

declare( strict_types = 1 );

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Header.php';

class HeaderTest extends TestCase {

	public function testGetHeader() {

		$header = new Header();
		$text = $header->getHeader();

		$this->assertContains( 'DOCTYPE html', $text );
		$this->assertContains( '<html>', $text );
		$this->assertContains( '<head>', $text );
		$this->assertContains( '<body>', $text );
	}
}
