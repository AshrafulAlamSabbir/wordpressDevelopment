 <div class="comments-area">
                       

                        <?php 

                        if(have_comments()) {
                      echo '<h4>'.get_comments_number().'comments</h4>';

                        }else{
                            echo '<h3> no comments</h3>';
                        }

                        ?>

                        <div class="comment-list">

                            <?php wp_list_comments(

                                 array(
                               'avatar_size' => 80,
                               'style'       =>  'div'
                              
                           )


                            );

                             ?>

                             


                        </div>	
                                                                   				
                    </div>
                    <div class="comment-form">

                        <?php 

                        if(comments_open()){
                            comment_form(
                               array(
                               'class_form' => '',
                               'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
                               'title_reply_after'  => '</h3>',
                           )

                            );
                        }

                        ?>
                
                    </div>