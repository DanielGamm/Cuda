<?php get_header();?>
<div class="pustoy__blok" style="padding: 85px 7px 15px; width: 100%; color: #2e2e2e;">

<div class="main__content">
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Цикл WordPress -->
    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h2 style="
    font-weight: 700;
    font-size: 40px;
    margin-bottom: 45px;
    letter-spacing: 3px;
    line-height: 1.15;
    position: relative;
    text-align: center;"><a style="color: #273a71;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
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