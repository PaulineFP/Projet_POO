<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alice&family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300&display=swap" rel="stylesheet">
    <title>Crée un article</title>
</head>
<body>
  <div class="container">
    <section id="created">
      <div class="fond_form">
        <h1 >Crée un article dans la BDD</h1>
        <form class="form" action="index.php" method="POST">
            <input type="text" name="titre" placeholder="Titre de l'article">
            <textarea class="desc_txt" type="text" name="desc"  placeholder="Description de l'article"></textarea>
            <button type="submit" name='newCreate' >Ajouter</button>
        </form>
      </div>
    </section>
  </div>
</body>
</html>
