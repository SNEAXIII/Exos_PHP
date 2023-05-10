<?php
require_once "../class/main.php";
$flowbird = new Entreprise("FlowBird","Rue Isaac Newton","Besancon","25000");
$yves = new Salarie("Mals","Yves",$flowbird);
$coachingPlusPlus = new Formation("Coaching plus plus",20,new DateTime(),new DateTime());

