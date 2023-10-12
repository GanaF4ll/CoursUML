<?php 
class CompteBancaire {
    private $nom;
    private $solde;

    public function __construct($nom = 'Dupont', $solde = 1000) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function depot($somme) {
        $this->solde += $somme;
    }

    public function retrait($somme) {
        if ($somme <= $this->solde) {
            $this->solde -= $somme;
        } else {
            echo "Fonds insuffisants.";
        }
    }

    public function affiche() {
        echo "Le solde du compte bancaire de {$this->nom} est de {$this->solde} euros.\n";
    }
}

$compte1 = new CompteBancaire('Miles Morales', 800);
$compte1->depot(350);
$compte1->retrait(200);
$compte1->affiche();

$compte2 = new CompteBancaire('Bruce Wayne', 2000000000000000);
$compte2->depot(25000000000);
$compte2->affiche();


$compte3 = new CompteBancaire('Peter Parker', 300);
$compte3->retrait(400);
$compte3->affiche();
?>
