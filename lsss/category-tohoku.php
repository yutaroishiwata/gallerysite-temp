<?php get_header(); ?>

<main class="wrap clearfix">

<div id="content">

	<article id="main_content">

                
                <section id="select_shop_area" class="clearfix sp_wrap_neg">
                       
                       <ul id="pref_tabMenu">
                           <div><li>AOMORI<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--青森-->
                           <div><li>AKITA<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--秋田-->
                           <div><li>IWATE<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--岩手-->
                           <div><li>YAMAGATA<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--山形-->
                           <div><li>MIYAGI<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--宮城-->
                           <div><li>TOKUSHIMA<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--福島-->
                       </ul>
                       
                       
                       <div id="pref_tabBoxes">
                            <div>
                            <li><a href="<?php echo get_category_link('27'); ?>" title="青森">全エリア</a></li>
                            <?php  wp_list_categories('child_of=27&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                         
                            <div>
                            <li><a href="<?php echo get_category_link('28'); ?>" title="秋田">全エリア</a></li>
                            <?php wp_list_categories('child_of=28&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>  
                            </div>
                    
                            <div>
                            <li><a href="<?php echo get_category_link('29'); ?>" title="岩手">全エリア</a></li>
                            <?php wp_list_categories('child_of=29&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                          
                            <div>
                            <li><a href="<?php echo get_category_link('31'); ?>" title="山形">全エリア</a></li>
                            <?php wp_list_categories('child_of=31&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>

                            <div>
                            <li><a href="<?php echo get_category_link('30'); ?>" title="宮城">全エリア</a></li>
                            <?php wp_list_categories('child_of=30&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                      
                            <div>
                            <li><a href="<?php echo get_category_link('32'); ?>" title="福島">全エリア</a></li>
                            <?php wp_list_categories('child_of=32&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                        </div>
             
                </section><!--select_shop_area-->
            
            
            
             <section id="shop_posts_area">
                   <header class="sub_title_base wrap_col">
                        <h2>TOHOKU AREA</h2><!--東北-->
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
                                <p>I'm sorry....</p>
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