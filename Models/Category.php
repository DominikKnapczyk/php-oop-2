<?php 

class Category {
  // dichiarazione proprietà
  protected $name; // nome della categoria
  public $icon; // icona associata alla categoria
  
  // proprietà statica che contiene le categorie accettate
  private static $accepted_categories = [
    "Cane",
    "Gatto"
  ];

  // costruttore
  public function __construct($name, $icon)
  {
    // assegna l'icona alla categoria
    $this->icon = $icon;

    try {
      // tenta di assegnare il nome alla categoria e se non riesce, solleva un'eccezione
      if(!$this->setName($name)) throw new Exception("Invalid argument 'name' for 'Category' class. It must be a string and within the accepted_categories array");
    } catch (Exception $e) {
      // se l'eccezione viene sollevata, mostra un messaggio di errore e termina l'esecuzione dello script
      $error_message = $e->getMessage();
      include __DIR__ . "/../error_page.php";
      exit;
    }    
  }

  // metodo per impostare il nome della categoria
  public function setName($name) {
    // controlla se il nome è una stringa e se è presente nell'elenco delle categorie accettate
    if(!is_string($name) || !in_array($name, self::$accepted_categories)) return false;
    // se il nome è valido, lo assegna alla categoria e restituisce l'istanza della classe
    $this->name = $name;
    return $this;
  }

  // metodo per ottenere il nome della categoria
  public function getName() {
    return $this->name;
  }
}