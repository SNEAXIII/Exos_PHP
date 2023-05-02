<?php
class Phrase {
    private string $phrase;
    private array $signePonctuationFaible;
    private array $alphabet;
    private string $caracteresAccentues;

    public function __construct(string $phrase) {
        $this->phrase = $phrase;
        $this->signePonctuationFaible = [",",";",":","(",")","\"","[","]","|"];
        $this->alphabet = array_merge(range("a","z"),["'","-"],range(0,9));
        $this->caracteresAccentues = "áàâäãåçéèêëíìîïñóòôöõúùûüýÿ";
    }
    public function toString() : string
    {
        return $this->phrase;
    }
    public function calculerNombreMots() : int
    {
        $nombre_mot = 0;
        $ancienCaractere = " ";
        $phraseEdulcoree = strtolower($this->phrase);
        foreach (str_split($phraseEdulcoree) as $caractere)
        {
            if ((in_array($caractere,$this->alphabet) || strpos($caractere,$this->caracteresAccentues)) &&
                ($ancienCaractere == " " || in_array($ancienCaractere,$this->signePonctuationFaible))) {
                $nombre_mot++;
            }
            $ancienCaractere = $caractere;
        }
        return $nombre_mot;
    }
}

$phrase = new Phrase("Hier, il a été à la plage.");
echo $phrase->calculerNombreMots();