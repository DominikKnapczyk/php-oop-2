<?php 

// Importa la classe Product e le due trait Weightable e Typeable
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Traits/Weightable.php";
require_once __DIR__ . "/Traits/Typeable.php";

// Crea la classe ProductFood che estende Product e utilizza le trait Weightable e Typeable
class ProductFood extends Product {
  use Weightable; // Utilizza la trait Weightable
  use Typeable; // Utilizza la trait Typeable

  // Definisce il costruttore della classe ProductFood
  public function __construct(
    string $name, // Nome del prodotto
    float $price, // Prezzo del prodotto
    Category $category, // Categoria del prodotto
    string $weight_unit, // Unità di misura del peso del prodotto
    int $weight, // Peso del prodotto
    string $type // Tipo di prodotto alimentare
  )
  {
    // Chiama il costruttore della classe Product per inizializzare le proprietà della classe padre
    parent::__construct($name, $price, $category);

    // Inizializza le proprietà specifiche della classe ProductFood
    $this->weight_unit = $weight_unit;
    $this->weight = $weight;
    $this->type = $type;
  }

  // Definisce il metodo getTextClassname che restituisce il nome della classe come stringa
  public function getTextClassname() {
    return "Cibo";
  }
}