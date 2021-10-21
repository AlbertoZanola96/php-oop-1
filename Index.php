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


        function setTitolo($_titolo)
        {
            $this->titolo = $_titolo;
        }
        function getTitolo()
        {
           return $this->titolo;
        }


        function setPubblicazione($_pubblicazione)
        {
            $this->pubblicazione = $_pubblicazione;
        }
        function getPubblicazione()
        {
           return $this->pubblicazione;
        }


        function setDurata($_durata)
        {
            $this->durata = $_durata;   
        }
        function getDurata()
        {
           return $this->durata; 
        }


        function setEta($_eta)
        {
            $this->eta = $_eta; 
        }
        function getEta()
        {
           return $this->eta; 
        }
    }

    $movieOne = new Movie('La maledizione della prima luna', '27 agosto 2003', '2h 23m', 7);
    var_dump($movieOne);

    $movieTWo = new Movie('harry potter e la pietra filosofale', '06 dicembre 2001', '2h 32m', 10);
    var_dump($movieTWo);
?>