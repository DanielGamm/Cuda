<?php get_header();?>
<div class="pustoy__blok" style="padding: 85px 7px 15px; width: 100%; color: #2e2e2e;">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Цикл WordPress -->
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h2 style="
    font-weight: 700;
    font-size: 40px;
    margin-bottom: 45px;
    letter-spacing: 3px;
    line-height: 1.15;
    position: relative;
    text-align: center;"><a style="color: #273a71;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    </article>


<?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>


</div>
<?php get_footer();?>