<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
 <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="CSS/style.min.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alice&family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300&display=swap" rel="stylesheet">

     <title>Titre de la page</title>
 </head>
 <div class="couverture"></div>
 <div class="containaire">
   <section id="art_menu">
    <h1>Femmes importantes qui ont changées le monde</h1>
     <div class="cadre">

       <?php foreach ($blogs as $blog): ?>
         <div class="art_content">
           <img src="" alt="">
           <div class="art_title">
             <p>
               <b><?= $blog->getId();?></b>
             </p>
            <br>
             <h2><?= $blog->getTitle();?></h2>
           </div>

           <div class="art_more">
              <a  href="index.php?show&id=<?= intval($blog->getId()) ?> ">Voir l'article</a>
           </div>

           <div class="art_option">
             <div class="update">
                <a href="index.php?edit&id=<?= intval($blog->getId()) ?> ">modifier l'article</a>
             </div>
             <div class="delete">
                 <a href="index.php?delete&id=<?= intval($blog->getId()) ?> ">Supprimer</a>
             </div>
           </div>

         </div>
       <?php endforeach; ?>
     </div>
     <div class="create_art">
        <a href="index.php?create">Crée un article</a>
     </div>
   </section>
 </div>

</body>
</html>
