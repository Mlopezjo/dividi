
<article class="container pb-5 mb-5">
    <h2 class="text-center border-bottom border-success mb-5 pb-2">Présentation</h2>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php $image = get_field('imagepres'); ?>
        <p class="presentation_texte text-white text-center p-5 z-depth-2 rounded" style="background-image: url('<?php echo esc_url($image['url']); ?>');background-position: center;background-size: cover;background-repeat: no-repeat;">
          <?php the_field('presentation'); ?>
        </p>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php $equipe = new WP_Query( array( 'post_type' => 'equipe','order'	=> 'ASC') ); ?>
    <div class="cards justify-content-between p-0 pt-5 m-0 row m-auto">
      <?php if ($equipe->have_posts()) : ?>
        <?php while ($equipe->have_posts()) : $equipe->the_post(); ?>
        <div class="card card-cascade col-12 col-lg-6 pb-5 pt-5">
            <div class="view view-cascade overlay"><img src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%" height="auto">
                <a href="#">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade text-center">
                <h4 class="card-title border-bottom border-success pb-2"><strong><?php the_title(); ?></strong></h4>
                <p class="card-text"><?php the_content(); ?></p>
            </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
</article>
