<?php get_header(); ?>
<!-- Page Content -->
<section class="parallax">
    <div class="container">
        <div class="row">
												        
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- Blog Post Content Column -->
            <div class="col-md-9 col-sm-9">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<div class="col-lg-12 post-title">
						<!-- Blog Post -->

						<!-- Title -->
						<h4><?php the_title(); ?></h4>

						<!-- Author -->
						<p >
							by <?php the_author(); ?>
						</p>
					</div>
				</a>
                <hr class="blue-line">
				<div class="col-lg-12 time">
					<!-- Date/Time -->
				
					<p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_date(); ?> at <?php the_time(); ?></p>
				</div>
                <hr class="blue-line">

                <!-- Preview Image 
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">-->
				<?php the_post_thumbnail('large', array('class' => 'img-responsive'));?>
                <hr class="blue-line">

                <!-- Post Content -->
                <p class="lead"><?php the_content(); ?></p>
                

                <hr class="blue-line">
			
                <!-- Blog Comments -->
			</div>
			<?php endwhile; else: ?>
				<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "lovecraft"); ?></p>
			<?php endif; ?>
			
			<div class="col-md-3 col-sm-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
		
		
		
	</div>
</section>
<?php get_footer(); ?>