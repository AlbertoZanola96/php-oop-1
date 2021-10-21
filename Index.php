<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
    class Movie {
        public $titolo;
        public $pubblicazione;
        public $durata;
        public $eta;
        

        function __construct($_titolo, $_pubblicazione, $_durata, $_eta)
        {
            $this->titolo = $_titolo;
            $this->pubblicazione = $_pubblicazione;
            $this->durata = $_durata;
            $this->eta = $_eta;
        }

    }
?>