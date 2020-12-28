<?php get_header();?>
<div class="wrapper archive__style">

<div class="main__content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Цикл WordPress -->
    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <a class="post__hrefzz" href="<?php the_permalink(); ?>">
        <h2 class="post__titlezz"><?php the_title(); ?></h2>
        <?php the_content(); ?>
        </a>
    </div>


<?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>
</div>

<?php if ( is_active_sidebar( 'true_side' ) ) : ?>
 
 <div id="true-side" class="sidebar right-sidebar">

     <?php dynamic_sidebar( 'true_side' ); ?>

 </div>

<?php endif; ?>


</div>
<?php get_footer();?>