<?php get_header(); ?>
<div class="content-wrapper">
   <div class="content-main">

      <div class="content">

         <div id='slideshowHolder'>

            <img src="<?php bloginfo("template_url") ?>/images/img1.jpg" alt='' />

            <img src="<?php bloginfo("template_url") ?>/images/img1.jpg" alt='' />

            <img src="<?php bloginfo("template_url") ?>/images/img1.jpg" alt='' />

         </div>

         <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
            <!-- здесь формирование вывода постов, -->

            <div class="articles">

               <div class="articles-gen-img">
                  <a href="<?php the_permalink() ?>">
                     <?php if (has_post_thumbnail()): the_post_thumbnail()?>
                     <?php else: ?>
                        <img src="<?php bloginfo("template_url") ?>/images/post-img4.jpg" alt="Preview image" />
                     <?php endif ?>
                  </a>
               </div>
               <div class="articles-head">
                  <span class="articles-date"><img src="<?php bloginfo("template_url") ?>/images/articles-autor.jpg" alt="admin" /> <span><?php the_author() ?></span> - <?php the_time('M jS Y')?></span>
                  <span class="articles-comments"><img src="<?php bloginfo("template_url") ?>/images/articles-comment.jpg" alt="commets" /> <a href="#"><?php comments_popup_link("Коментариев нет", '1 коментарий') ?></a></span>           
               </div>

               <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
               <p><?php the_excerpt() ?></p>

               <p><a href="<?php the_permalink() ?>">Read More</a></p>

            </div>
            <!-- где работают теги шаблона относящиеся к the loop -->
         <?php endwhile; ?>
      <?php endif; ?>
      <div class="pager">            	
         <a href="#">1</a>
         <a href="#">2</a>
         <a href="#">3</a>
         <a href="#">4</a>
         <span>of</span>  
         <a href="#">75</a>  
         <a href="#" class="prev-next">Next</a>
      </div>
   </div>
   <?php get_sidebar() ?>
</div>    
</div>
<?php get_footer(); ?>
<script>
   $(document).ready( function(){
      $('#slideshowHolder').jqFancyTransitions({ navigation: true, width: 594, height: 279 });
   });
</script>
<?php wp_footer(); ?>
</body>
</html>
