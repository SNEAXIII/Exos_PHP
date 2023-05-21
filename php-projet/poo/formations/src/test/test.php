<?php
require_once "../class/main.php";
$flowbird = new Entreprise("FlowBird","Rue Isaac Newton","Besancon","25000");
$yves = new Salarie("Mals","Yves",$flowbird);
$yves2 = new Salarie("Malsi","Yves",$flowbird);
$coachingPlusPlus = new Formation("Coaching plus plus",20,new DateTime(),new DateTime());

# On regarde le nombre de participants
var_dump(count($coachingPlusPlus->getInscriptions()));

# On ajoute Yves
$coachingPlusPlus->inscrireSalarie($yves);

# On regarde le nombre de participants
var_dump(count($coachingPlusPlus->getInscriptions()));

# On ajoute un doublon de Yves
$coachingPlusPlus->inscrireSalarie($yves);

# On regarde le nombre de participants
var_dump(count($coachingPlusPlus->getInscriptions()));

# On ajoute un autre Yves, son homonyme
$coachingPlusPlus->inscrireSalarie($yves2);

# On regarde le nombre de participants
var_dump(count($coachingPlusPlus->getInscriptions()));

# On note Yves
$coachingPlusPlus->noterSalarie($yves,6,"Mauvais");

# On visualise son inscription
$inscriptionYvain = $coachingPlusPlus->getInscriptions()[0];
echo $inscriptionYvain;
