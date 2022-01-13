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
  </div>
</div>
