<?php get_header(); ?>

<?php
$args = array(
  'post_type' => 'page',
  'post_status' => 'publish',
  'order' => 'ASC'
);
$query = new WP_Query($args);
$i = 0;
while ($query->have_posts()) {
  $query->the_post();
?>

  <?php if ($i % 2) {
  ?>
    <section class="page-section bg-primary text-white mb-0" id="about">

    <?php
  } else {
    ?>
      <section class="page-section portfolio" id="portfolio">
      <?php
    } ?>
      <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?php the_title(); ?></h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
          </div>
          <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row">
          <?php the_content(); ?>
        </div>
        <!-- /.row -->

      </div>
      </section>
    <?php
    the_excerpt();
    $i++;
  }
  wp_reset_postdata();
    ?>

<?php get_footer(); ?>