<?php get_header(); ?>

<main class="wrap clearfix">

<article id="gallery_content" class="wrap_neg">
<!--記事はじめ-->
    <ul>
		<?php if(have_posts()): ?><!--一つでも記事があったら-->
		<?php while(have_posts()): the_post(); ?>
            <li class="col_1_3">
                <div class="post_container wrap_posts">
                    <a href="<?php the_field('shop_link'); ?>">
                 	<!--サムネイル-->
					<div id="shop_thumbnail">
						<?php if(has_post_thumbnail()): ?><!--サムネがあれば-->
                        	<?php the_post_thumbnail('full'); ?><!--そのまま表示-->
                        <?php else: ?><!--サムネなければ-->
			                <img src="<?= get_template_directory_uri(); ?>/img/no-image.png" alt="NO IMAGE" width="260" height="260"><!--no-imageを表示-->
						<?php endif; ?>
					</div>
                    <h3><?php the_title(); ?></h3>
                    </a>
                </div>
			</li><!--wrap_col2-->
            <!--記事終わり-->
		<?php endwhile; ?>
     </ul>
		<?php else: //記事がなかったら ?>	
        	<article>
            	<p>記事が見つかりませんでした！</p>
            </article>
		<?php endif; ?>
			
			<!--ページャー-->
			<?php
				the_posts_pagination(
					array(
						'prev_text' => '&lt;',
						'next_text' => '&gt;'
					)
				); 
			?>
    
</article><!-- #mini_content -->

</main>
<?php get_footer(); ?>