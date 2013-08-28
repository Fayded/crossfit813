<?php get_header(); 

/*
Template name: addInfo Template
*/

<?php $postslist = get_posts('category=1&numberposts=1&order=DESC&orderby=post_date');
foreach ($postslist as $post) :
setup_postdata($post); ?>
<div class="post_item">
<span class='side_date'><?php the_time('F j, Y'); ?></span><br />
<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
<?php the_excerpt(); ?>
</div>
<?php endforeach; ?>




<?php get_footer(); ?>
