<?php 

class T800 extends Terminators {
	public function __construct() {
        parent::__construct("T800", 500, 150, 15, 80);
    }

	public function connor() {
		echo "Je dois retrouver et tuer Sarah Connor !";
	}
}