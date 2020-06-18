<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">

        </div>
    </div>
    <section class="container page-wrap m-auto">

      <div class="row">

        <div class="col-lg-9 ">
          <h1 class="mx-auto"> <?php the_title(); ?>   </h1>
          <div class="text-secondary">
          <?php get_template_part('includes/section','content'); ?>
        </div>
        </div>
  </div>
    </section>
<?php endif; ?>



<?php get_footer(); ?>
