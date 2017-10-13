<?php get_header(); ?>

<main class="wrap clearfix">
<article id="shop_posts_area">

    
         <!--記事はじめ-->
            <?php if(have_posts()): ?><!--一つでも記事があったら-->
            <?php while(have_posts()): the_post(); ?>
			<article class="col_2_6">
                <div class="wrap_col2">
                 	<!--サムネイル-->
                    <div class="post_container">
					<div class="thumbnail">
						<a href="#">
						<?php if(has_post_thumbnail()): ?><!--サムネがあれば-->
                        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a><!--そのまま表示-->
                        <?php else: ?><!--サムネなければ-->
							<img src="<?= get_template_directory_uri(); ?>/img/no-image.png" alt="NO IMAGE" width="260" height="260"><!--no-imageを表示-->
						<?php endif; ?>
						</a>
					</div>
                    
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        
                    </div>
                </div><!--wrap_col-->
			</article>
            <!--記事終わり-->
    
                <?php endwhile; ?>
                <?php else: ?><!--記事がなかったら-->
                    <article>
                        <div class="wrap_col2">
                        <p>I'm sorry....</p>
                        </div>
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

</article><!-- #shop_posts_area-->
</main><!--wrap-->

	

<?php get_footer(); ?>