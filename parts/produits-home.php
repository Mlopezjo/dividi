<?php $produit = new WP_Query( array( 'post_type' => 'product','showposts' => 3,'order'	=> 'DESC') ); ?>
<article class="pb-5 mb-5 elegant-color-dark container-fluid" style="background-color: #212121;">
    <h1 class="text-light container text-center border-bottom border-success pt-5 mt-5 pb-2">Nos Nouveautés</h1>
    <div class="justify-content-between container cards p-0 m-auto row">

      <?php if ($produit->have_posts()) : ?>
        <?php while ($produit->have_posts()) : $produit->the_post(); ?>

        <div class="card card-cascade col-lg-3 col-12 p-0 mt-5">
            <div class="view view-cascade overlay">
                <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
                <a href="#">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade text-center">
                <h4 class="card-title"><strong><?php the_title(); ?></strong></h4>
                <p class="card-text"><?php the_content(); ?></p>
                <p class="card-text"><?php the_content(); ?></p>
                <a class="btn btn-success" href="<?php the_permalink(); ?>">Voir le produit</a></div>
        </div>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <div class="container p-0">
        <div class="card card-cascade p-0 mt-5">
            <div class="view view-cascade overlay jo_img" style="background-image: url(&quot;<?php echo get_template_directory_uri() . "/assets/img/tas.jpg"; ?>&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;">
                <a href="#">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade text-center">
                <h4><strong>Venez découvrir tous nos autres produits.</strong></h4>
                <p class="card-text">Différentes variétés de pains, des viennoiseries et des confiseries.</p><a class="btn btn-success" href="./boutique">Tous nos produits</a></div>
        </div>
    </div>
</article>
