<?php get_header(); ?>

<main class="wrap clearfix" >

<article id="brand_content">
        <div id="brand_menu" class="clearfix sp_wrap_neg"> 
            <ul>
                <?php wp_list_categories('taxonomy=brand_cat&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
            </ul>
        </div>
            
        <div class="tarm_text"><!--ターム名表示-->
            <?php single_tag_title(); ?>
        </div>

            <div class="wrap_neg">
                <!--記事はじめ-->
                <?php if(have_posts()): ?><!--一つでも記事があったら-->
                <?php while(have_posts()): the_post(); ?>
                <article class="col_1_3">
                    <div class="wrap_posts">
                        <div class="post_container"><!--サムネイルとタイトルをまとめて透過-->
                        <!--サムネイル-->
                        <a href="<?php the_field('brand_link'); ?>">
                            <div class="thumbnail">
                                <?php if(has_post_thumbnail()): ?><!--サムネがあれば-->
                                    <?php the_post_thumbnail('full'); ?><!--そのまま表示-->
                                <?php else: ?><!--サムネなければ-->
                                    <img src="<?= get_template_directory_uri(); ?>/img/no-image.png" alt="NO IMAGE"><!--no-imageを表示-->
                                <?php endif; ?>
                            </div>
                        </a>
                        
                        <a href="<?php the_field('brand_link'); ?>"><h3><?php the_title(); ?></h3></a>
                        </div>

                        <table>
                            <tr>
                                <td>
                                    <?php if( get_field('brand_detail') ):?>
                                        <p><?php the_field('brand_detail'); ?></p>
                                    <?php endif; ?>    
                                </td>
                            </tr>

                            <tr class="text_icon_area">
                                <td>
                                    <?php if( get_field('brand_site_link') ):?>
                                    <a href="<?php the_field('brand_site_link'); ?>" target="_blank">
                                    <p>Official page<p>
                                    </a>
                                    <?php endif; ?>
                                </td>

                                <td class="insta_icon">
                                    <?php if( get_field('brand_insta_link') ):?>
                                    <a href="<?php the_field('brand_insta_link'); ?>" target="_blank">
                                        <svg class="icon">
                                            <use xlink:href="#icon_insta"/>
                                        </svg>
                                    </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div><!--wrap_posts-->
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
                        
                </div><!--wrap_neg-->
    
</article><!--brand_content-->
   
</main><!--wrap-->
<?php get_footer(); ?>