<?php 

require_once __DIR__ . "/Product.php";

class ProductToy extends Product {
  public $material;

  public function __construct(
    string $name,
    float $price,
    Category $category,
    string $material
  )
  {
    // Richiama il costruttore della classe padre Product
    parent::__construct($name, $price, $category);

    // Imposta il valore della proprietà $material
    $this->material = $material;
  }

  // Ridefinisce il metodo getTextClassname della classe padre Product per restituire il testo "Giocattolo"
  public function getTextClassname() {
    return "Giocattolo";
  }
}