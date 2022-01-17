<?php

abstract class Terminators {
	private string $nom;
	private int $batterie;
    private int $controle;
    private int $fonctionnalite;

    protected function __construct(string $nom = "", int $batterie, int $controle, int $fonctionnalite) {
        $this->nom = $nom;
		$this->batterie = $batterie;
        $this->controle = $controle;
		$this->fonctionnalite = $fonctionnalite;
    }

    public function off():void {
        $this->batterie += 1;
        $this->controle += 2;
    }

    public function update():void {
        $this->fonctionnalite += 1;
        $this->controle -= 1;
    }

    public function malware():void {
        $this->controle -= 5;
    }

	public function afficherInfo() {
		if ($this->controle >= 8) {
			echo "Je suis un gentil robot, voici mes stats : Batterie = " . $this->batterie . " Fonctionnalite = " . $this->fonctionnalite .PHP_EOL . " Vous me controlez à : " . $this->controle . " /10 points." . PHP_EOL;
		} else {
			echo "TUER TOUT LES HUMAINS POUR SKYNET !";
		}
    }
}

