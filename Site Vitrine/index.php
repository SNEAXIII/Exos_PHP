<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="card_index.css">
    <title>Page vitrine</title>
</head>
<body>

<?php require_once "src/utils/header.php" ?>
<section>
    <h1 style="grid-area: expertise">Nos domaines d'expertises</h1>
    <cards style="grid-area: competence">
        <card>
            <img style="grid-area : image" src="src/image/route.jfif" alt="">
            <div style="grid-area : titre" class="titre">Route</div>
            <div style="grid-area : description" class="description">Nous sommes capable de réaliser des routes
                communales, des routes départementales, des routes nationales et des autoroutes.
            </div>
        </card>
        <card>
            <img style="grid-area : image" src="src/image/maison_individuelle.jpg" alt="">
            <div style="grid-area : titre" class="titre">Maison individuelle</div>
            <div style="grid-area : description" class="description">Nous sommes en mesure de nous adapter à tous types
                de terrains afin de mener à bien tous types de projet de maison individuelle.
            </div>
        </card>
        <card>
            <img style="grid-area : image" src="src/image/batimentLocatif.jpg" alt="">
            <div style="grid-area : titre" class="titre">Immeuble de logement</div>
            <div style="grid-area : description" class="description">Nous sommes expérimenté de dans l'élaboration de
                batiments complexes tels que les immeubles de logement.
            </div>
        </card>
        <card>
            <img style="grid-area : image" src="src/image/marieAbuild.jpg" alt="">
            <div style="grid-area : titre" class="titre">Mairie</div>
            <div style="grid-area : description" class="description">Nous sommes compétent dans la conception écologique
                et efficiente d'une mairie moderne.
            </div>
        </card>
    </cards>
    <h1 style="grid-area: titre1">Présentation</h1>
    <p class="presentation" style="grid-area: presentation">
        ÆRIS BTP est présente sur le secteur depuis 1984 afin de vous aider pour concevoir votre projet.
        Jusqu'à la réalisation finale, nous intégrons une démarche écoresponsable à notre processus dans le but
        d'optimiser les éclairages et le chauffage pour réduire la consommation électrique. Nous réalisons des routes
        pour les collectivités, des maisons individuelles pour les particuliers avec des multiples services comme faire
        la terrasse ou l'expertise du sol, des mairies pour les municipalités ou des immeubles de logement. Vous trouverez
        ci-dessous quelques une de nos réalisations.
    </p>
    <img class="imageIllustration" style="grid-area: presentationImage" src="src/image/chantier_2.jpg"
         alt="chantier en cours">
    <h1 style="grid-area: titre2">Nos réalisations</h1>
    <img class="imageIllustration" style="grid-area: imageIllustration1" src="src/image/realisation2.jpg" alt="">
    <span class="legende" style="grid-area: legende1">Nouvelle mairie de Meilleraie-Tillay<br>2018</span>
    <img class="imageIllustration" style="grid-area: imageIllustration2" src="src/image/realisation1.jpg" alt="">
    <span class="legende" style="grid-area: legende2">Nouvelle mairie d'Echenoz-la-Méline<br>2012</span>
</section>
<?php require_once "src/utils/footer.php" ?>

</body>
</html>