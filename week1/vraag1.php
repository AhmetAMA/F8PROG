<?php

declare(strict_types=1);

class Product {
    public function __construct(private string $naam, private string $beschrijving, private int $prijs){}
    
    public function setName(string $naam): void {
        $this->naam = $naam;
    }
    public function getName(): string {
        return $this->naam;
    }
}

class BankAccount {
    private $ibanNummer;
    private $geld;

    public function __construct($ibanNummer, $geld) {
      $this->ibanNummer = $ibanNummer;
      $this->geld = $geld;
    }

    public function storten($bedrag) {
      $this->geld += $bedrag;
    }
  
    public function opnemen($bedrag) {
      if ($this->geld >= $bedrag) {
        $this->geld -= $bedrag;
        return true;
      } else {
        return false;
      }
    }

    public function getgeld() {
      return $this->geld;
    }
}

$account = new BankAccount("NL12ABCD3456789", 1000.0);
$account->storten(500.0);
$account->opnemen(200.0);
echo "geld: " . $account->getgeld();
$account->opnemen(1500.0);
echo "geld: " . $account->getgeld();
  
class BankAccountPlus extends BankAccount {
    protected $ibanNummer;
    protected $geld;
    protected $limiet = -1000;
    protected $boetePercentage = 5;

    public function haalGeldAf($bedrag) {
        $nieuwgeld = $this->geld - $bedrag;
    
        if ($nieuwgeld < $this->limiet) {
            return false;
        }

        $this->geld = $nieuwgeld;

        return true;
    }

    public function berekenBoete() {
        $boete = 0;
    
        if ($this->geld < 0) { 
            $boete = abs($this->geld) * $this->boetePercentage / 100;
        }
    
        return $boete;
    }

    public function toonStatus() {
        $boete = $this->berekenBoete();
        $tijd = date('Y-m-d H:i:s');
        $status = "ibanNummer: {$this->ibanNummer}\n";
        $status .= "geld: €{$this->geld}\n";
        $status .= "Boete bedrag: €{$boete}\n";
        $status .= "Datum en tijd: {$tijd}\n";
    
        return $status;
    }
}

$account = new BankAccountPlus("NL12ABCD3456789", 1000.0);
$account->storten(500.0);
$account->opnemen(200.0);
echo $account->toonStatus();
$account->opnemen(1500.0);
echo $account->toonStatus();

?>