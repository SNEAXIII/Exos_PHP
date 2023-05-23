<?php
class Phrase
{
    private string $phrase;
    private array $signePonctuationFaibleAvecEspace;
    private array $alphabetAccentue;

    public function __construct(string $phrase)
    {
        $this->phrase = $phrase;
        $this->signePonctuationFaibleAvecEspace = [
            " ",
            ",",
            ";",
            ":",
            "(",
            ")",
            "\"",
            "[",
            "]",
            "|",
        ];
        $this->alphabetAccentue = array_merge(
            range("a", "z"),
            ["'", "-"],
            range(0, 9),
            str_split(
                "áÁâÂàÀåÅãÃäÄæÆçÇéÉêÊèÈëËíÍîÎìÌïÏñÑóÓôÔòÒøØõÕöÖœŒšŠßðÐþÞúÚûÛùÙüÜýÝÿŸ"
            )
        );
    }
    public function toString(): string
    {
        return $this->phrase;
    }
    public function calculerNombreMots(): int
    {
        $nombre_mot = 0;
        $ancienCaractere = " ";
        foreach (str_split(strtolower($this->phrase)) as $caractere) {
            if (
                in_array($caractere, $this->alphabetAccentue) &&
                in_array(
                    $ancienCaractere,
                    $this->signePonctuationFaibleAvecEspace
                )
            ) {
                $nombre_mot++;
            }
            $ancienCaractere = $caractere;
        }
        return $nombre_mot;
    }
    public function getMotPosition(int $nb): string
    {
        $nombre_mot = 0;
        $ancienCaractere = " ";
        $motEnConstruction = "";
        $enCoursDeMot = false;
        foreach (str_split(strtolower($this->phrase)) as $caractere) {
            if (
                in_array($caractere, $this->alphabetAccentue) &&
                in_array(
                    $ancienCaractere,
                    $this->signePonctuationFaibleAvecEspace
                )
            ) {
                $nombre_mot++;
                $enCoursDeMot = true;
            }
            if (
                in_array($ancienCaractere, $this->alphabetAccentue) &&
                in_array($caractere, $this->signePonctuationFaibleAvecEspace)
            ) {
                if ($nombre_mot == $nb) {
                    return $motEnConstruction;
                }
                $motEnConstruction = "";
                $enCoursDeMot = false;
            }
            if ($enCoursDeMot) {
                $motEnConstruction += $caractere;
            }
            $ancienCaractere = $caractere;
        }
        return $nombre_mot;
    }
}

$phrase = new Phrase("Je suis en train d'apprendre le langage PHP.");

echo $phrase->calculerNombreMots() . PHP_EOL;
echo $phrase->getMotPosition(7) . PHP_EOL;
