<?php
class Phrase {
    private string $phrase;
    private array $signePonctuation;
    public function __construct(string $phrase) {
        $this->phrase = $phrase;
        $this->signePonctuation = [",",";",":","(",")","\"","[","]","|"];
    }
    public function toString() : string
    {
        return $this->phrase;
    }
    public function calculerNombreMot() : int
    {
        $nombre = 0;
        $phraseEdulcoree = str_replace()
    }
}