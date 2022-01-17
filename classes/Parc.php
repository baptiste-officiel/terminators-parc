<?php

class Parc {

    private array $terminators = [];

    public function add($terminator){
        array_push($this->terminators, $terminator);
    }
	
    public function arreter() {
		foreach($this->terminators as $terminator) {
			$terminator->off();
        }
    }
	
    public function maj() {
		foreach($this->terminators as $terminator) {
			$terminator->update();
        }
    }
	
    public function fuir() {
		foreach($this->terminators as $terminator) {
			$terminator->malware();
        }
    }

	public function compter() {
		echo "Dans ce Parc il y a : " . count($this->terminator) . " terminator ";
	}

    public function afficheTerminators(){
        foreach($this->terminators as $terminator){
            echo $terminator->name . " : " . $terminator->afficherInfo().PHP_EOL ; 
        }
    }
}