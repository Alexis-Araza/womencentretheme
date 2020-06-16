<?php get_header(); ?>
<div class="container">
  <section class="row pt-5">
    <div class="col-lg-9">
      <h1 class="mb-5"> <?php the_title(); ?>   </h1>
      <?php if(has_post_thumbnail()): ?>
          <!-- This has a featured image -->
          <div>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
          </div>
      <?php endif; ?>

    <div>
      <?php get_template_part('includes/section','content'); ?>
    </div>

    </div>

    <div class="col-lg-3 mt-5 pt-5 pl-4 widget">

      <?php if(is_active_sidebar('page-sidebar')) :?>
        <?php dynamic_sidebar('page-sidebar'); ?>
      <?php endif; ?>
    </div>
</section>
</div>

<?php get_footer(); ?>
