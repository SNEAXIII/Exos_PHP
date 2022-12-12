<?php
$articles =
[
    [
        'libelle' =>     "Nom article",
        'image' => 'https://loremflickr.com/g/320/240/paris',
        'prix' => 499.9,
        'promo' => true,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aenean gravida tristique sem sit amet tempor.
Interdum et malesuada fames ac ante ipsum primis in faucibus.
Fusce a tortor fermentum, aliquam elit porta, ullamcorper elit.
Cras nulla augue, viverra nec iaculis a, euismod ac arcu.
Fusce sed suscipit turpis, et pharetra enim.
In tincidunt venenatis pretium. Donec semper lobortis arcu non pulvinar.
Donec suscipit fermentum orci faucibus porttitor.
Ut eget sapien malesuada, accumsan leo in, faucibus lorem. Donec quis sapien dui.'
    ]
];
$article = $articles[0];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>Portefolio</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <img class="card-img" src="<?php echo $article["image"] ?>" alt="">
        </div>
        <div class="card-body">
            <h2 class="card-title"><?php echo $article["libelle"] ?></h2>
            <p class="card-price"><?php
                $prix = $article["prix"];
                echo $prix." euro";
                if ($prix > 2) {
                    echo "s";
                }
                ?></p>
            <p class="card-text"><?php
                $description = $article["description"];
                if (strlen($description) > 100) {
                    $description = substr($description,0,100)."...";
                }
                echo $description;
                ?></p>
            <div class="card-btn-detail">
                <a href="#">Voir</a>
            </div>
        </div>
    </div>
</body>
</html>