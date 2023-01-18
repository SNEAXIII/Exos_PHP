<?php
function afficheMultiCartes(int $nb):void {
    for ($i=0; $i <= $nb; $i++) {
        afficheUneCarte();
    }
}

function afficheUneCarte(): void
{
    echo '
    <div class="carte">
    <img class="image" src="image/photo1.jpeg" alt="hehe">
    <h5 class="nom">BMW</h5>
    <div class="pays">
        <i class="fa-solid fa-location-dot"></i>
        <p>Allemagne</p>
    </div>
    <div class="nbPortes">
        <i class="fa-solid fa-car"></i>
        <p>5 portes</p>
    </div>
    <div class="consoEssence">
        <i class="fa-solid fa-gas-pump"></i>
        <p>7,5L/100</p>
    </div>
    <div class="prix">
        <i class="fa-solid fa-euro-sign"></i>
        <p>30 000</p>
    </div>
    <a class="contact" href="#">Contact</a>
    </div>
    ';
}
