<?php get_header(); ?>

<main class="wrap clearfix">

<article id="shop_posts_area">

        <!--カテゴリー情報を取得-->
        <div class="cat_text">
            <?php
            //現在表示されているカテゴリーアーカイブページのカテゴリーIDを取得
            $cat_id=get_query_var('cat');
            $cat=get_category($cat_id);
            echo $cat->name; 
            ?>
        </div>

        <div class="wrap_neg">
            <!--記事はじめ-->
            <?php if(have_posts()): ?><!--一つでも記事があったら-->
            <?php while(have_posts()): the_post(); ?>
			<article class="col_1_3">
                <div class="wrap_posts">
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
				
	            <table>
			  <tr>
			     <td>
                   <?php if( get_field('google_map') ):?>
                   <a href="<?php the_field('google_map'); ?>" target="_blank">
                        <?= get_post_meta(get_the_ID(),'place',true); ?>
                　　</a>
                    <?php endif; ?>    
                   </td>
			 </tr>
						
			<tr class="info_link_area">
			     <td>
				<?php if( get_field('shop_site_link') ):?>
                                <a href="<?php the_field('shop_site_link'); ?>" target="_blank">
                                <p>Official page</p>
                                </a>
                                <?php endif; ?>
                            </td>

			    <td class="insta_area">
				<?php if( get_field('shop_insta_link') ):?>
                        <a href="<?php the_field('shop_insta_link'); ?>" target="_blank">
                            <svg class="icon_insta">
                            <use xlink:href="#icon_insta"/>
                            </svg>
                        </a>
                    <?php else: ?>
                        <svg class="icon_insta link_none">
                            <use xlink:href="#icon_insta"/>
                        </svg>
                    <?php endif; ?>
                </td>
			</tr>
		   </table>
                </div><!--wrap_col-->
			</article>
            <!--記事終わり-->
    
                <?php endwhile; ?>
                <?php else: ?><!--記事がなかったら-->
                            <article class="wrap_posts">
                                <p>I'm sorry....</p>
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
        </div>
  
</article><!-- #shop_posts_area-->
</main><!--wrap-->

<?php get_footer(); ?>