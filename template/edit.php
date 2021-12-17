<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>

  <h1 >Modifier un article de la BDD</h1>

  <form action="index.php" method="POST">
      <input type="text" name="titre" placeholder="Titre de l'article" value='<?= $blog->getTitle() ?>'>
      <input type="text" name="desc"  placeholder="Description de l'article" value='<?= $blog->getDesc() ?>'>
      <input type="hidden" name="id" value="<?= $blog->getId() ?>"></input>
      <button type="submit" name="newUpdate">Modifier</button>
  </form>

</body>
</html>
