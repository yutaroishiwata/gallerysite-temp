<?php get_header(); ?>

<main class="wrap clearfix">



<div id="content">
	<article id="main_content">
               
                
                <section id="select_shop_area" class="clearfix sp_wrap_neg">
                       
                       <ul id="pref_tabMenu">
                           <div><li>YAMANASHI<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--山梨-->
                           <div><li>NAGANO<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--長野-->
                           <div><li>ISHIKAWA<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--石川-->
                           <div><li>HUKUI<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--福井-->
                           <div><li>TOYAMA<svg class="arrow_down"><use xlink:href="#arrow_down"></use></svg></li></div><!--富山-->
                       </ul>
                       
                       
                       <div id="pref_tabBoxes">
                            <div>
                            <li><a href="<?php echo get_category_link('35'); ?>" title="山梨"></a>全エリア</li><!--山梨-->
                            <?php  wp_list_categories('child_of=35&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                         
                            <div>
                            <li><a href="<?php echo get_category_link('34'); ?>" title="長野">全エリア</a></li><!--長野-->
                            <?php wp_list_categories('child_of=34&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?> 
                            </div>
                    
                            <div>
                            <li><a href="<?php echo get_category_link('37'); ?>" title="石川">全エリア</a></li><!--石川-->
                            <?php wp_list_categories('child_of=37&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                          
                            <div>
                            <li><a href="<?php echo get_category_link('38'); ?>" title="福井">全エリア</a></li><!--福井-->
                            <?php wp_list_categories('child_of=38&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                          
                            <div>
                            <li><a href="<?php echo get_category_link('36'); ?>" title="富山">全エリア</a></li><!--富山-->
                            <?php wp_list_categories('child_of=36&show_count=1&hide_empty=0&title_li=&orderby=count&order=DESC'); ?>
                            </div>
                        </div>
             
                </section><!--select_shop_area-->
            
            
             <section id="shop_posts_area">
                   <header class="sub_title_base wrap_col">
                        <h2>HOKURIKU・KOUSHINETU AREA</h2><!--北陸・甲信越-->
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