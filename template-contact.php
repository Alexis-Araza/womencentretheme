<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="page-wrap">
<div class="container mt-5">
      <h1> <?php the_title(); ?>   </h1>
      <div class="row">

        <div class="col-lg-4">

          <form>
              <div class="row">
                <label class="my-5 col"> Username : </label>
                <input class="form-control my-5 col" type="text"/> <br/> <br/>
              </div>
              <button class="btn btn-lg btn-info"> Submit </button>
          </form>

        </div>

        <div class="col-lg-5">
              <?php get_template_part('includes/section','content'); ?>
        </div>


        <div class="col-lg-3 widget mt-5 pl-5">

          <?php if(is_active_sidebar('page-sidebar')) :?>
            <?php dynamic_sidebar('page-sidebar'); ?>

          <?php endif; ?>
        </div>
        </section>

      </div>



</div>
</section>

<?php get_footer(); ?>
