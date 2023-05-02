<?php
class Phrase {
    private string $phrase;
    private array $signePonctuation;
    private array $alphabet;

    public function __construct(string $phrase) {
        $this->phrase = $phrase;
        $this->signePonctuation = [",",";",":","(",")","\"","[","]","|"];
        $this->alphabet = array_merge(range("a","z"),["'","-"],range(0,9));
    }
    public function toString() : string
    {
        return $this->phrase;
    }
    public function calculerNombreMot() : int
    {
        $nombre_mot = 0;
        $ancienCaractere = " ";
        $phraseSansPonctuationFaible = str_replace($this->signePonctuation," ",$this->phrase);
        $phraseLowSansPonctuationFaible = strtolower($phraseSansPonctuationFaible);
        echo $phraseLowSansPonctuationFaible;
        $phraseEdulcoree = strtr($phraseLowSansPonctuationFaible, 'áàâäãåçéèêëíìîïñóòôöõúùûüýÿ', 'aaaaaaceeeeiiiinooooouuuuyy');;
        echo $phraseEdulcoree;
        foreach (str_split($phraseEdulcoree) as $caractere)
        {
            if (in_array($caractere,$this->alphabet) && $ancienCaractere == " ") {
                $nombre_mot++;
            }
            $ancienCaractere = $caractere;
        }
        return $nombre_mot;
    }
}

$phrase = new Phrase("Hier, il a été à la plage.");
echo $phrase->calculerNombreMot();
//echo str_word_count("t.t.t");