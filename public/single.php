<?php get_header(); ?>

<main class="wrap clearfix">

<article id="main_content">
    
	<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <article class="shop_article">

			<div class="entry_body sp_wrap_neg"><!--画像のmargin、line-height打ち消し-->
                    <?php the_content(); ?>
                    <h1><?php the_title(); ?></h1><!--<p><?php the_field('place'); ?></p>-->
                    
                        <?php $img_c = get_field('quote_link'); ?><!--画像引用元リンクがない場合は非表示-->
                        <?php if(empty($img_c)):?>
                            <?php else:?>
                            <span>
                            <small id="quote">Source：<a href="<?php the_field('quote_link'); ?>" target="_blank"><?php the_field('quote_name'); ?></a></small></span>
                        <?php endif;?>
             </div>
                    
                        <h4>SHOP DATA</h4>
                           <address>
                            <p>address.&nbsp;&nbsp;<?php the_field('address'); ?></p>    
                            <p>open.&nbsp;&nbsp;<?php the_field('open'); ?></p>
                            <p>tel.&nbsp;&nbsp;<?php the_field('tel'); ?></p>
                                        
                            <p><?php if( get_field('google_map') ):?>
                                    <a href="<?php the_field('google_map'); ?>" target="_blank">
                                    Google Map
                                    </a>
                                <?php endif; ?>
                            
                                <?php if( get_field('shop_site_link') ):?>/<!--区切りスラッシュ-->
                                    <a href="<?php the_field('shop_site_link'); ?>" target="_blank">
                                    Official Page
                                    </a>
                                <?php endif; ?>
                            
                                <?php if( get_field('shop_insta_link') ):?>/<!--区切りスラッシュ-->
                                    <a href="<?php the_field('shop_insta_link'); ?>" target="_blank">
                                    instagram
                                    </a>
                                <?php endif; ?>
                            </p>
                          </address>
                    
                    <!--記事IDとタクソノミーを指定してタームを取得-->
                    <div class="brand_tag">
                        <?php $brand_terms = wp_get_object_terms($post->ID, 'shop_brand');
                        if(!empty($brand_terms)){
                        echo '<h4>BRAND</h4>';//タームがない場合は非表示
                        }
                        ?>
                            <?php
                            //タームとURLを出力
                            if(!empty($brand_terms)){
                              if(!is_wp_error( $brand_terms )){
                                echo '<ul>';
                                foreach($brand_terms as $term){
                                  echo '<li><a href="'.get_term_link($term->slug, 'shop_brand').'">'.$term->name.'</a></li>'; 
                                }
                                echo '</ul>';
                              }
                            }
                            ?>
                    </div>
                
            
                <footer id="content_footer">

                    <?php get_template_part('single_related'); ?><!--関連記事テンプレート読み込み-->
                    
				</footer>
                    
                <section id="ranking_area" class="clearfix">
                <h4>ACCESS RANKING</h4>
                    <?php get_sidebar(); ?><!--サイドバー取得-->    
                </section>
                    
        </article><!--shop_article-->
        <?php endwhile; ?>
        <?php endif; ?>
    
</article><!--main_content-->     
    
         
        
        <?php edit_post_link(); ?><!--編集-->

</main><!--wrap-->

<?php get_footer(); ?>