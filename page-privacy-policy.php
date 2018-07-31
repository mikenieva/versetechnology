<?php get_header() ?>

<style>
	h4{
	padding: 30px 0px;
    text-transform: none;
    line-height: 60px;
    font-size: 36px;
    color: #2E69F0;
	}
</style>
<section>
	<div class="row clearfix">
		<h4><?php the_title() ?></h4>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	</div>
</section>
<br>
<br>

<?php get_footer() ?>