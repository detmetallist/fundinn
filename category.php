<?php get_header('blog') ?>
		<div class="blog_main_content">
			<?php
				$category = get_queried_object();
				$category_id=$category->term_id;
				$args = array( 'posts_per_page' => 8, 'cat' => $category_id );
				 $my_posts = get_posts($args); 
				 foreach( $my_posts as $post ): ?> <?php setup_postdata($post); ?>
					<div class="blog_article">
						<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('spec_thumb'); ?></a>
						<a href="<?php the_permalink(); ?>"><h3><?php echo the_title(); ?></h3></a>
						<?php 
							$content = get_the_content('подробнее');
							$postOutput = wp_trim_words( preg_replace('/<img[^>]+./','', $content), 30, ' ...' );
				 		?>
						<p><?php echo $postOutput ?></p>
						<div class="date_comments">
							<span><i class="fa fa-calendar-o"></i><?php echo get_the_date('d'); get_date(get_the_date('m')); echo get_the_date('Y'); ?></span>
							<span><i class="fa fa-comment-o"></i>0</span>
						</div>
					</div>
				<?php endforeach;
				wp_reset_postdata();
			?>		
			<div class="blog_button_more">
				<button>More</button>
			</div>
		</div>
<?php get_footer('blog'); ?>