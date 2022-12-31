<?php 

    get_header();

    while(have_posts()) {

            the_post(); ?>

            <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"> <?php the_title(); ?> </h1>
                <div class="page-banner__intro">
                <p>
                    replace later
                </p>
                </div>
            </div>
            </div>
        
 
            <?php 

              $isCurrentParentPage = wp_get_post_parent_id(get_the_ID( ));

                if($isCurrentParentPage){
                    ?>
                        <div class="container container--narrow page-section">
                        <div class="metabox metabox--position-up metabox--with-home-link">
                            <p>
                            <a class="metabox__blog-home-link" href="<?php echo get_permalink($isCurrentParentPage); ?>">
                                <i class="fa fa-home" aria-hidden="true">                        
                                </i> <?php  echo get_the_title(wp_get_post_parent_id(get_the_ID($isCurrentParentPage))); ?>
                            </a>
                                    <span class="metabox__main"><?php echo the_title(); ?></span>
                            </p>
                        </div>
                    <?php
                }
             ?>

           <?php 
                
                $getChildOfCurrentParent = get_pages(array(
                                           'child_of' =>  get_the_ID()
                ));
                if( $isCurrentParentPage or $getChildOfCurrentParent ) { ?>
                    <div class="page-links">
                        <h2 class="page-links__title"><a href="<?php echo get_permalink($isCurrentParentPage);  ?>"><?php echo get_the_title($isCurrentParentPage);  ?> </a></h2>
                        <ul class="min-list">
                            <!-- <li class="current_page_item"><a href="#">Our History</a></li>
                            <li><a href="#">Our Goals</a></li> -->
                        <?php

                            if($isCurrentParentPage) {
                                $getChildrenOfParent = $isCurrentParentPage ;
                            }else{
                                $getChildrenOfParent = get_the_ID();
                            }
                                    wp_list_pages(array(
                                        'title_li' => NULL,
                                        'child_of' => $getChildrenOfParent,
                                        'sort-column' => 'menu_order'
                                        ));
                      } ?>
                        </ul>
                    </div>
               
            <div class="generic-content">
                <p><?php the_content(); ?> </p>
            </div>
            </div>
        <?php 
    }


    get_footer();

?> 




