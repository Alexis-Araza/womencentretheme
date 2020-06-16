<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">

        </div>
    </div>
    <section class="container page-wrap m-auto">

      <div class="row">

        <div class="col-lg-9 ">
          <h1 class="mt-5 text-info"> <?php the_title(); ?>   </h1>
          <div class="text-secondary">
          <?php get_template_part('includes/section','content'); ?>
        </div>
        </div>
        <div class="col-lg-3 widget pl-5 mt-5">

      <?php if(is_active_sidebar('page-sidebar')) :?>
        <?php dynamic_sidebar('page-sidebar'); ?>

      <?php endif; ?>
    </div>
  </div>
    </section>
<?php endif; ?>



<?php get_footer(); ?>
