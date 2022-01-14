<div class="cadre">
  <div class="img">
    <?php
    // echo $img;
    /*echo $img_ .i; */
    ?>
  </div>
  <div class="txt">
    <div class="titre">
      <?= $blog->getTitle();?>
    </div>
    <div class="Description">
      <p>
        <?= $blog->getDesc();?>
      </p>
    </div>
    <!-- Liste commentaires avec un $comments en boucle -->
    <?php foreach ($comments as $comment):?>
      <div class="comment_bloc">
        <div class="name">
          <p>
            <b><?= $comment->getName(); ?></b>
          </p>
        </div>
        <div class="comment">
          <p>
            <b><?= $comment->getComment();?></b>
          </p>
        </div>
        <div class="delete">
            <a href="index.php?deleteComment&id=<?= intval($comment->getId()); ?> ">Supprimer</a>
        </div>

      </div>
    <?php endforeach; ?>

    <h2>Ajouter un commentaire</h2>

    <form class="form_comment" action="index.php" method="POST">
      <input type="hidden" name="blogID" value="<?= $blog->getId()?>">
      <input type="text" name="name" placeholder="Nom/Pseudo">
      <textarea class="desc_txt" type="text" name="comment"  placeholder="Ecrire un commentaire"></textarea>
      <button type="submit" name='newComment' >Envoyer</button>
    </form>
  </div>
</div>
