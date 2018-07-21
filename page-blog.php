<?php get_header() ?>

<section style="display: block;margin-top: 65px;border-bottom: 1px solid #808080;margin: 0 18%;padding-top: 145px;padding-bottom: 25px;">
    <div style="display: inline-block;vertical-align: top;margin: 0;">
		<h1 style="color: blue;margin: 0;font-size: 35px;padding: 0;vertical-align: top;">Blog</h1>
	</div>
    <div style="display: inline-block;float: right;vertical-align: top;margin-top: 7px;">
        <div style="display: inline-block;background-color: #9cf31b;border-radius: 13px;padding: 2px 35px;color: white;">
			Articles
		</div>
        <div style="display: inline-block;background-color: #9cf31b;border-radius: 13px;padding: 2px 35px;color: white;">
			Press Releases
		</div>
        <div style="display: inline-block;background-color: #9cf31b;border-radius: 13px;padding: 2px 35px;color: white;">
			Papers
		</div>
    </div>
</section>
	<section style="margin: 59px 18% 0;">
		<?php query_posts('showposts=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-md-4">
				<div class="card card-blog">
					<div class="card-image">
						<a href="<?php the_permalink(); ?>">
							<img class="img img-raised" style="width: 100%;" src=" <?php the_post_thumbnail_url(); ?>"/>
						</a>
					</div>
					<div class="card-body">
						<h6 class="card-category text-info category">
							<?php 
							$categories = get_the_category();
							echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
							echo "</a>";
							?>
						</h6>
						<h5 class="card-title titulo">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h5>
						<p class="card-description">
							<?php the_excerpt(); ?><br/>
						</p>
					</div>
				</div>
			</div>
			<?php endwhile; else : ?>
			<?php endif; wp_reset_query(); ?>
			<div>
    			<a href="#">&lt; Ant</a>&nbsp;<a href="#">1</a>&nbsp;<a href="#">2</a>&nbsp;<a href="#">3</a>&nbsp;<a href="#">4</a>&nbsp;<a href="#">5</a>&nbsp;<a href="#">6</a>&nbsp;<a href="#">7</a>&nbsp;<a href="#">Sig &gt;</a>&nbsp;
			</div>
	</section>
<?php get_footer() ?>