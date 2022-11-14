Pour revenir à la page du projet, cliquez [ici](../README.md)

## La base de données

---
La **base de données** est composée de **3 tables** : **article**, **auteur** et **catégorie**.
### La table article ([tableArticle](../base-de-donnees/tableArticle.php))
Un **article** correspond à un **post** dans un blog.  
Il est rédigé par un **auteur**.  
Il appartient à une **catégorie**.  
Un **article** est défini par :
- id
- titre
- contenu
- date de création
- actif (booléen permettant de préciser si l'article doit être affiché ou pas)
- **id_auteur** (clé étrangère vers la [tableAuteur](../base-de-donnees/tableAuteur.php))
- **id_catégorie** (clé étrangère vers la [tableCategorie](../base-de-donnees/tableCategorie.php))

### La table auteur ([tableAuteur](../base-de-donnees/tableAuteur.php))
Un **auteur** est défini par
- id
- prénom
- nom


### La table catégorie ([tableCategorie](../base-de-donnees/tableCategorie.php))
Une **catégorie** est définie par
- id
- libellé  

Il y a 4 **catégories** : Informatique, Loisirs, Musique et Histoire.   

