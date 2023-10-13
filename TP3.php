<?php

class Animal {
    protected $cri;
    protected $taille;
    protected $sexe;
    protected $dents;

    protected function manger($dents) {}

    protected function crier() {}
}

class Mammifere extends Animal {
    protected $couleur_de_pelage;
    protected $nombre_de_pattes = 4;
    protected $mamelles;

    protected function allaiter($mamelles) {}

    protected function mordre($dents) {}
}

class Chat extends Mammifere {
    private $cri = "miaulement";

    protected function manger($dents) {}

    protected function mordre($dents) {}

    protected function crier() {
        return $this->cri; // Added missing '$this->'
    }
}

class Chien extends Mammifere {
    private $cri = "aboiement";

    protected function manger($dents) {}

    protected function mordre($dents) {}

    protected function crier() {
        return $this->cri; // Added missing '$this->'
    }
}

class Poisson extends Animal {
    protected $couleur_des_ecailles;
    protected $nageoire;
    protected $dents;

    protected function nager($nageoire) {}

    protected function mordre($dents) {}
}

class PoissonRouge extends Poisson {
    protected function manger($dents) {}

    protected function nager($nageoire) {}

    protected function mordre($dents) {}
}

class Requin extends Poisson {
    protected function manger($dents) {}

    protected function nager($nageoire) {}

    protected function mordre($dents) {}
}

?>


<!-- AXE D'AMELIORATION:
  utiliser des constructeurs pour créer des nouveaux objets mammifères et poisson :
  
  protected function __constructMamifere($couleur_de_pelage, $nombre_de_pattes) {
        $this->couleur_de_pelage = $couleur_de_pelage;
        $this->nombre_de_pattes = $nombre_de_pattes;
    }
   protected function __constructPoisson($couleur_des_ecailles, $nageoire) {
        $this->couleur_des_ecailles = $couleur_des_ecailles;
        $this->nageoire = $nageoire;
    } -->
