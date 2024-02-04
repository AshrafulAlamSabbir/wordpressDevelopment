<?php 
   get_header();
?>

    <!--================ Start Banner Area =================-->
    <section class="mb-5 container">
      <h1 style="color: black;padding-top: 140px">Archives Post List:</h1>
    </section>

    <!--================ End Banner Area =================-->

    
    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">

                        <?php 
                               if(have_posts()):
                               while(have_posts()):
                               the_post();

                                      get_template_part('template-parts/acrhive-post','post');

                               endwhile;

                             //pagination er code

                              the_posts_pagination( array(
                                  'mid_size'  => 2,
                                 'prev_text' => __( 'prev ', 'tfournewtheme' ),
                                'next_text' => __( 'next ', 'textdomain' ),
                                ) );

                               endif;
                        ?>

                      
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    
 <?php 
    get_footer();
 ?>