<?php
include 'Rumus.php';

class Output extends Rumus {

	function __construct($a, $b, $hasil) {

		// if ('*') {
		// 	$this->hasil = $a . $hasil . $b . "=" . $this->kali($a, $b);
		// } else if ('+') {
		// 	$this->hasil = $a . $hasil . $b . "=" . $this->tambah($a, $b);
		// } else if ('-') {
		// 	$this->hasil = $a . $hasil . $b . "=" . $this->kurang($a, $b);
		// } else if ('/') {
		// 	$this->hasil = $a . $hasil . $b . "=" . $this->bagi($a, $b);
		// }

		switch ($hasil) {
		case '*':
			$this->hasil = $a . $hasil . $b . "=" . $this->kali($a, $b);
			break;
		case '/':
			$this->hasil = $a . $hasil . $b . "=" . $this->bagi($a, $b);
			break;
		case '+':
			$this->hasil = $a . $hasil . $b . "=" . $this->tambah($a, $b);
			break;
		case '-':
			$this->hasil = $a . $hasil . $b . "=" . $this->kurang($a, $b);
			break;
		}
	}

	public function result() {

		return $this->hasil;
	}

}
$obj = new Output(12, 12, '+');
echo $obj->result();