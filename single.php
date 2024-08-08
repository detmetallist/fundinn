<?php get_header('statia-blog') ?>
	<?php setPostViews(get_the_ID()); ?>
			<div class="blog_statia_content_container">
				<?php echo the_content(); ?>
				<div class="comments">
					<h2>Оставьте комментарий</h2>
					<form>
						<div class="pole">
							<label for="comment">Комментарий</label>
							<textarea rows="10" name="comment" id="comment"></textarea>
						</div>
						<div class="pol_polya">
							<label for="name">Имя*</label>
							<input type="text" name="name" id="name"> 
						</div>
						<div class="pol_polya">
							<label for="email">Email*</label>
							<input type="text" name="email" id="email">
						</div>
						<div class="pole">
							<label for="website">website</label>
							<input type="text" name="website" id="website">
						</div>
						<div class="pole">
							<button type="submit">Опубликовать комментарий</button>
						</div>
					</form>
				</div>
			</div>
		</div>
			<div class="blog_main_content">
				<?php 
					global $post;
 
					// тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
					$related_tax = 'category';
					 
					// получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
					$cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );
					 
					// массив параметров для WP_Query
					$args = array(
						'posts_per_page' => 4, // сколько похожих постов нужно вывести,
						'tax_query' => array(
							array(
								'taxonomy' => $related_tax,
								'field' => 'id',
								'include_children' => false, // нужно ли включать посты дочерних рубрик
								'terms' => $cats_tags_or_taxes,
								'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
							)
						)
					);
					$misha_query = new WP_Query( $args );
					 
					// если посты, удовлетворяющие нашим условиям, найдены
					if( $misha_query->have_posts() ) :
					 
					 
						// запускаем цикл
						while( $misha_query->have_posts() ) : $misha_query->the_post();
							?>
								<div class="blog_article">
									<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('spec_thumb'); ?></a>
									<a href="<?php the_permalink(); ?>"><h3><?php echo $misha_query->post->post_title ?></h3></a>
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
							<?
						endwhile;
					endif;
					 
					// не забудьте про эту функцию, её отсутствие может повлиять на другие циклы на странице
					wp_reset_postdata();
				?>
			</div>
<?php get_footer('blog'); ?>