<?php get_header(); ?>

<main class="wrap clearfix" >

	<article id="main_content">
 
                <section id="svg_map_area" class="sp_wrap_neg">
                     <svg class="svg_jp_map">
                   	    <svg><a href="<?php echo get_category_link('26');?>"><use xlink:href="#hokkaido"/></a></svg>
                        <svg><a href="<?php echo get_category_link('10');?>"><use xlink:href="#tohoku"/></a></svg>
                        <svg><a href="<?php echo get_category_link('2');?>"><use xlink:href="#kanto"/></a></svg>
                        <svg><a href="<?php echo get_category_link('15');?>"><use xlink:href="#hokuriku_koushinetu"/></a></svg>
                        <svg><a href="<?php echo get_category_link('11');?>"><use xlink:href="#tokai"/></a></svg>
                        <svg><a href="<?php echo get_category_link('12');?>"><use xlink:href="#kansai"/></a></svg>
                        <svg><a href="<?php echo get_category_link('13');?>"><use xlink:href="#chugoku"/></a></svg>
                        <svg><a href="<?php echo get_category_link('14');?>"><use xlink:href="#shikoku"/></a></svg>
                        <svg><a href="<?php echo get_category_link('16');?>"><use xlink:href="#kyusyu"/></a></svg>
                    </svg>
                </section>
                
                <section id="ranking_area" class="clearfix">
                    <div class="sub_title_base">
                       <h2>ACCESS RANKIMG</h2>
                    </div>
                        <?php get_sidebar(); ?><!--ランキング取得--> 
                </section> 

               
                <section id="popular_shop">
                    <div class="sub_title_base">
                        <h2>POPULAR SHOPS</h2>
                    </div>
                        <ul>
                            <?php
                            $args = array('orderby' => 'count','order' => 'desc','number' => 10);
                            $tags = get_terms('post_tag', $args);
                            foreach($tags as $value) {
                            echo '<li><a href="'. get_tag_link($value->term_id) .'">'. $value->name .'</a></li>';
                            }
                            ?>
                        </ul>
                </section>  
                    

	</article>
	
</main>
<?php get_footer(); ?>