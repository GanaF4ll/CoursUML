<?php

class Animal {
    public $cri;
    public $taille;
    public $sexe;
    public $lieu_d_habitation;
    public $place_dans_la_chaine_alimentaire;

    public function manger() {}

    public function crier() {}
}

class Mammifere extends Animal {
    public $couleur_de_pelage;
    public $nombre_de_pattes = 4;

    public function allaiter() {}

    public function mordre() {}
}

class Chat extends Mammifere {

    public $nombre_de_pattes = 4;


    public function manger() {}

    public function mordre() {}

    public function crier() {}
}

class Chien extends Mammifere {

    public $nombre_de_pattes = 4;

    public function manger() {}

    public function mordre() {}

    public function crier() {}
}

class Poisson extends Animal {
    public $couleur_des_ecailles;
    public $nageoire;

    public function nager() {}

    public function mordre() {}
}

class PoissonRouge extends Poisson {
    public function manger() {}

    public function nager() {}

    public function mordre() {}
}

class Requin extends Poisson {
    public function manger() {}

    public function nager() {}

    public function mordre() {}
}

?>

<!-- AXE D'AMELIORATION:
  utiliser des constructeurs pour créer des nouveaux objets mammifères et poisson :
  
  public function __constructMamifere($couleur_de_pelage, $nombre_de_pattes) {
        $this->couleur_de_pelage = $couleur_de_pelage;
        $this->nombre_de_pattes = $nombre_de_pattes;
    }
   public function __constructPoisson($couleur_des_ecailles, $nageoire) {
        $this->couleur_des_ecailles = $couleur_des_ecailles;
        $this->nageoire = $nageoire;
    } -->
