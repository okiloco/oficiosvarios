<!-- PAGE EDITER CONTENT -->
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<div id="front-content-box" class="instaapp-section">
		<div class="container">
			<div class="row-fluid"> 
				<?php the_content(); ?>
			</div>
			<div class="border-content-box bottom-space"></div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>
<!-- \\PAGE EDITER CONTENT -->