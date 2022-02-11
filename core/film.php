<?php

class film{
    public $titolo;
    public $valutazione;

    public function __construct($titolo,$valutazione)
    {
        $this->titolo = $titolo;
        $this->valutazione = 0;
        $this->setVal($valutazione);
    }

    function setVal($valutazione){
        if($valutazione > $this->valutazione){
            if($valutazione > 5){
                $valutazione = 5;
            }
            $this->valutazione = $valutazione;
        }
    }
    
}