<?php
get_header();

do_action( 'hestia_before_single_post_wrapper' );
?>

<div class="<?php echo hestia_layout(); ?> model-3d-page">
<div class="blog-post blog-post-wrapper">
  <div class="container">
        <?php
            $link = get_field('link');
            if(isset($link) ):
            ?>
             <div class="sketchfab-embed-wrapper">
                <iframe class="model-object-3d"
                title="<?php echo get_the_title();?>"
                frameborder="0"
                allowfullscreen
                mozallowfullscreen="true"
                webkitallowfullscreen="true"
                allow="autoplay; fullscreen; xr-spatial-tracking"
                xr-spatial-tracking execution-while-out-of-viewport
                execution-while-not-rendered
                web-share
                src="<?php echo $link;?>/embed"></iframe>
                <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                <a href="<?php echo $link;?>?utm_medium=embed&utm_campaign=share-popup&utm_content=160c4e67245c4ad1a30b6c5d03609a67"
                target="_blank"
                rel="nofollow"
                style="font-weight: bold;
                color: #1CAAD9;"> <?php echo get_the_title();?> </a> by <a href="https://sketchfab.com/xaek5?utm_medium=embed&utm_campaign=share-popup&utm_content=160c4e67245c4ad1a30b6c5d03609a67" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> xaek5 </a> on <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=160c4e67245c4ad1a30b6c5d03609a67" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a></p></div>
            <?php endif; ?>
            <p><?php the_content(); ?></p>
  </div>
</div>
</div>
<div class="footer-wrapper">
<?php get_footer(); ?>