<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Traits/Weightable.php";

class ProductBed extends Product {
  use Weightable; // Usa il trait Weightable

  public $material; // Attributo pubblico $material

  public function __construct(
    string $name,
    float $price,
    Category $category,
    string $weight_unit,
    int $weight,
    string $material
  )
  {
    parent::__construct($name, $price, $category); // Chiama il costruttore della classe madre

    $this->weight_unit = $weight_unit; // Imposta il valore di $weight_unit usando la proprietà del trait
    $this->weight = $weight; // Imposta il valore di $weight usando la proprietà del trait
    $this->material = $material; // Imposta il valore di $material usando l'argomento del costruttore
  }
  
  public function getTextClassname() {
    return "Cuccia"; // Metodo che ritorna il nome della classe come stringa
  }
}