<?php

class Header {
	public function getHeader() {
		return implode( "\n", [
			$this->getDocType(),
			'<html>',
			$this->getHead(),
			"    <body>\n"
		] );
	}

	private function getDocType(): string {
		return '<!DOCTYPE html>';
	}

	private function getHead(): string {
		return '    <head><title>Debugging test</title></head>';
	}
}
