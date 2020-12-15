<?php get_header()  ?>
<?php get_template_part("hero") ?>
<div class="posts">
<?php
    while (have_posts()) :
        the_post();  
    ?>
    <div class="post" <?php post_class() ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><a href="<?php the_permalink() ?>"><?php the_author(); ?></a></strong><br/>
                        <?php echo get_the_date(); ?>
                    </p>
                    <?php echo get_the_tag_list( "<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>"); ?>
                </div>
                <div class="col-md-8">
                    <p>
                        <?php 
                            if(has_post_thumbnail( )){
                                the_post_thumbnail("large", array("class"=>"img-fluid"));
                            }
                        ?>
                    </p>
                    <?php if(is_single()){
                        the_content();
                    }else{
                        the_excerpt();
                    }
                    
                    ?>
                </div>
            </div>

        </div>

    </div>
<?php
   endwhile;
?>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="pagination">
                <?php 
                    the_posts_pagination( array(
                    "screen_reader_text" => ' ',
                    "prev_text" => "Latest Post",
                    "next_text" => "Previous Post",
                    ));
                ?>
                </div>
            </div>
        </div>
<?php get_footer() ?>