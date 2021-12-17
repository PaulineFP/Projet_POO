<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>

  <h1 >Crée un article dans la BDD</h1>

  <form action="index.php" method="POST">
      <input type="text" name="titre" placeholder="Titre de l'article">
      <input type="text" name="desc"  placeholder="Description de l'article">
      <button type="submit" name='newCreate' >Ajouter</button>
  </form>

</body>
</html>
