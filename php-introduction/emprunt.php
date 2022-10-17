<?php
$montant = readline("Saisir un montant : ");
$taux = readline("Saisir un taux de TVA : ")/100;
$nombreAnnee = readline("Combien de temps : ");
//$Mensualite = ($montant * $taux * ((1+$taux)**($nombreAnnee*12)))/((1+$taux)**($nombreAnnee*12)-1);
//$Mensualite = ($montant * ($taux/12))/(1 - (1 + ($taux/12) ** (- (12 * $nombreAnnee))));
$Mensualite = round(($montant * $taux/12)/(1-(1 + $taux/12)**(-$nombreAnnee*12)),2);
$totalRembourse = round($Mensualite*12*$nombreAnnee-$montant);
echo "La mensualité est $Mensualite\nLe total rembourse est $totalRembourse";