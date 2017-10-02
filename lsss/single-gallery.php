<?php get_header(); ?>
	
	<div id="container" class="wrap clearfix">
		
		<main id="main_content" cslass="match">
		
			<?php if(have_posts()): ?>
        <?php 
			while(have_posts()): the_post();
		?>
			<article>
		
				<div class=" clearfix">
					
					<div class="movie-thumbnail">
					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail('thumbnail'); ?>
					<?php else: ?>	
						<img src="<?= get_uri(); ?>/images/no-image.png" alt="NO IMAGE" width="250" height="250">
					<?php endif; ?>
					</div>
					
					<table>
						<tr>
							<th>タイトル</th>
							<td><?php the_title(); ?></td>
						</tr>
						
						<tr>
							<th>公開日</th>
							<td></td>
						</tr>
						
						<tr>
							<th>一言レビュー</th>
							<td></td>
						</tr>
					</table>
				</div>
				
				<div class="text-content">
					<h3>レビュー</h3>
					<p><?php the_content(); ?></p>
				</div>
				
				<footer class="content_footer">
					<dl>
					<dt>ジャンル</dt>	
					<dd>
					</dd>
					</dl>
                    <?php edit_post_link('【edit】','<p class="edit">','</p>'); ?>
				</footer>
			</article>
            <?php endwhile; ?>
            <?php else: ?>
			<article>
             <p>記事が見つかりませんでした！</p>
			</article>
			<?php endif; ?>
			
			
			
			<ul class="pager">
				<li class="prev"><?php previous_post_link('&lt; %link'); ?></li>
				<li class="next"><?php next_post_link('%link &gt;'); ?></li>
			</ul>
	
		
		</main><!-- #main_content -->
		
		<?php get_sidebar(); ?>
	</div><!-- #container -->
	
	<?php get_footer(); ?>