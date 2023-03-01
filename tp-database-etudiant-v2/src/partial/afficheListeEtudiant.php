<section>
        <?php foreach ($students as $student) {
            $photo = $student["photo_etudiant"];
            $name = $student["prenom_etudiant"];
            $surname = $student["nom_etudiant"];
            $birth = formateDate($student["date_naissance_etudiant"]);
            $tableauAge = calculeAgeEtudiant($student["date_naissance_etudiant"]);
            $age = $tableauAge["age"];
            $color = $tableauAge["couleur"] ;
            ?>
        <div class="boxArticle">
            <article>
                <img class='card-img' src='db_images/<?=$photo ?>' alt=''>
                <span class='surname'><?="$surname"?></span>
                <span class='name'><?="$name"?></span>
                <span class='birth'><?="$birth"?></span>
                <span class='age' style="color: <?="$color"?>"><?="$age"?> ans</span>
                <a href='../../etudiant.php?id=<?= $student["id_etudiant"]?>' class='card-button'>Voir plus d'informations</a>
            </article>
        </div>
        <?php }?>
    </section>