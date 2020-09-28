<article class="container mb-2">
    <h2 class="text-center border-bottom border-success mb-3 pb-2"><?php echo the_title(); ?></h2>
    <?php if(is_shop()) { ?>
    <div class="text-center filtre border-bottom border-success pb-3">
      <a class="btn_produits btn btn-success" href="#17-pain">Nos Pains<br></a>
      <a class="btn_produits btn btn-success" href="#18-vienoiseries">Nos Viennoiseries<br></a>
      <a class="btn_produits btn btn-success" href="#19-confiseries">Nos Confiseries<br></a>
      <a class="btn_produits btn btn-success hiddening reset" href="#0-reset">Réinitialiser<br></a>
    </div>
  <?php } ?>

</article>
