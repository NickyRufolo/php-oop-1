<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
class Movie //classe assoccio queste 3 instanze nella nuova variabile Movie
{
    public $title;

    public $type;

    public $poster;

    public function __construct($_title, $_type, $_poster)
    {
        $this->title = $_title;
        $this->type = $_type;
        $this->poster = $_poster;
    }
    public function genereMovie()
    {
        echo "Il film $this->title è di genere $this->type";
    }
    public function displayProjectCard()
    {
        echo '<div class="card mt-4 w-25" >
                <div class="card-body">
                    <h5 class="card-title">' . $this->title . '</h5>
                    <p class="card-text">' . $this->type . '</p>
                    <img class="img-fluid" src="' . $this->poster . '">
                </div>
            </div>';
    }
}

?>