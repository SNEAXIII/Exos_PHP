<?php
const tableauNo1 = ["hehe","dadidou","couscous","pythonman"];
function afficheTableauSimple(): void
{
    $phrase = "Il est tout beau --> ";
    foreach (tableauNo1 as $elem) echo "<p>$phrase $elem</p>";
}
function afficheTableauListe(): void
{
    echo "<ul>";
    foreach (tableauNo1 as $elem) echo "<li>$elem</li>";
    echo "</ul>";
}
const tableauNo2 = [
        ["Prenom" => "jean","Nom" => "pierre","Email" => "jpd@test.com","Premium" => False],
        ["Prenom" => "peni","Nom" => "proze","Email" => "pepr@test.com","Premium" => True],
        ["Prenom" => "perouan","Nom" => "noisette","Email" => "peno@test.com","Premium" => False],
        ["Prenom" => "Python","Nom" => "Man","Email" => "PythonMan@test.com","Premium" => True],
];
function afficheTableauTable() {
    echo "<table><tr>";
    foreach (tableauNo2[0] as $key => $item) {
        echo "<th>$key</th>";
    }
    echo "</tr>";
    foreach (tableauNo2 as $item) {
        $prenom = $item["Prenom"];
        $nom = $item["Prenom"];
        $email = $item["Prenom"];
        $prenom = $item["Prenom"];

        echo "<tr><td></td></tr>";
    }
    echo "</table>";
}
?>
<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="table.css">
    <title>Document</title>
</head>
<body>
    <h1>Les tableaux</h1>
    <div>
        <a href="index.php">Retour au sommaire</a>
    </div>
    <h2>Affichage simple d'un tableau</h2>
        <?php afficheTableauSimple()?>
    <h2>Affichage sous forme de liste</h2>
        <?php afficheTableauListe()?>
    <h2>Affichage sus forme de table</h2>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Age</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>HEHE</td> <td>Boi</td> <td>25</td> <td>le bg</td>
        </tr>
        <tr>
            <td>Python</td> <td>Man</td> <td>18</td> <td>en reseau</td>
        </tr>
        <tr>
            <td>Peni</td> <td>Proze</td> <td>12</td> <td>H24</td>
        </tr>
        <tr> <td>Boisete</td> <td>est</td> <td>19</td> <td>acteur</td>
        </tr>
    </table>
    </table>
    <?php afficheTableauTable()?>
</body>
