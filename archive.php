<?php get_header();?>
<div class="wrapper archive__style">

<div class="main__content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Цикл WordPress -->
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <a class="post__hrefzz" href="<?php the_permalink(); ?>">
        <h2 class="post__titlezz"><?php the_title(); ?></h2>
        <!-- <?php the_content(); ?> -->
        <?php if ( has_post_thumbnail()) { ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            <?php the_post_thumbnail('my-thumbnail'); ?>
            </a>
        <?php } ?>
        <?php the_excerpt(); ?>
        </a>
    </article>


<?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>
</div>

<?php if (is_active_sidebar('true_side')) { get_sidebar(); } ?> 

</div>
<?php get_footer();?>