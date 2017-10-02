<?php get_header(); ?>

<main class="wrap clearfix">



<div id="content">
	<article id="main_content">

                
                <section id="select_shop_area" class="clearfix sp_wrap_neg">
                       
                       <ul id="pref_tabMenu">
                           <div><li>KYOTO<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--京都-->
                           <div><li>OSAKA<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--大阪-->
                           <div><li>NARA<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--奈良-->
                           <div><li>HYOGO<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--兵庫-->
                           <div><li>WAKAYAMA<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--和歌山-->
                           <div><li>SHIGA<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--滋賀-->
                       </ul>
                       
                       
                       <div id="pref_tabBoxes">
                            <div>
                            <li><a href="<?php echo get_category_link('44'); ?>" title="京都">全エリア</a></li><!--京都-->
                            <?php  wp_list_categories('child_of=44&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                         
                            <div>
                            <li><a href="<?php echo get_category_link('46'); ?>" title="大阪">全エリア</a></li><!--大阪-->
                            <?php wp_list_categories('child_of=46&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                    
                            <div>
                            <li><a href="<?php echo get_category_link('45'); ?>" title="奈良">全エリア</a></li><!--奈良-->
                            <?php wp_list_categories('child_of=45&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                          
                            <div>
                            <li><a href="<?php echo get_category_link('48'); ?>" title="兵庫">全エリア</a></li><!--兵庫-->
                            <?php wp_list_categories('child_of=48&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>

                            <div>
                            <li><a href="<?php echo get_category_link('47'); ?>" title="和歌山">全エリア</a></li><!--和歌山-->
                            <?php wp_list_categories('child_of=47&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                      
                            <div>
                            <li><a href="<?php echo get_category_link('43'); ?>" title="滋賀">全エリア</a></li>
                            <?php wp_list_categories('child_of=43&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                        </div>
             
                </section><!--select_shop_area-->
            
            
            
             <section id="shop_posts_area">
                   <header class="sub_title_base wrap_col">
                        <h2>KANSAI AREA</h2><!--関西-->
                    </header>

 	            <div class="wrap_neg">
                    <!--記事はじめ-->
                    <?php if(have_posts()): ?><!--一つでも記事があったら-->
                    <?php while(have_posts()): the_post(); ?>
                        <article class="col_1_3">
                            <div class="wrap_posts">
                                <div class="post_container"><!--サムネイルとタイトルをまとめて透過-->
                                <!--サムネイル-->
                                <div class="thumbnail"><!--サムネイル枠表示用-->
                                    <a href="#">
                                    <?php if(has_post_thumbnail()): ?><!--サムネがあれば-->
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a><!--そのまま表示-->
                                    <?php else: ?><!--サムネなければ-->
                                        <img src="<?= get_template_directory_uri(); ?>/img/no-image.png" alt="NO IMAGE"><!--no-imageを表示-->
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
                            </div><!--wrap_posts-->
                        </article>
                        <!--記事終わり-->

                        <?php endwhile; ?>
                        <?php else: ?><!--記事がなかったら-->	
                            <article class="wrap_posts">
                                <p class="no_posts">I'm sorry....</p>
                            </article>
                        <?php endif; ?>
			 </div><!--wrap_neg-->

                            <!--ページャー-->
　　　　                          <?php
                                the_posts_pagination(
                                    array(
                                        'prev_text' => '&lt;',
                                        'next_text' => '&gt;'
                                    )
                                ); 
                            ?>
             </section><!--shop_posts_area-->
	</article><!--main_content-->

</div><!--content-->
  
</main>
<?php get_footer(); ?>