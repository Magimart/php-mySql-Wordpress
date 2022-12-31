<h1>  <?php  bloginfo("name");  ?></h1>
<p>  <?php  bloginfo("description");  ?></p>


<?php 


    $placeOfBirth = "Kampala";
    $myname = "felix";
    $lecturers = array(" Lisa", "pip", "maria", "omeno");

    echo $lecturers;

    function getArticle($name, $quot ) {
       $article = "the author is $name testing this theme and $quot";

       echo $myname ;
       echo "<p>$article</p>" ;

    }

      getArticle("Magima", "his quotes goes as follows, he left with the windins");

?>


<!--  dynamically return all array values -->
<?php

            $num = 0;
            while($num < count($lecturers)){
                echo    "<li> Name is $lecturers[$num] </li>";
                $num++;
            }
           
            // for( $nums = 0; $nums < count($lecturers; $nums++)){
            //     echo    "<li> Name is $lecturers[$nums] </li>";
            // }
?>

<h2>he is born in  <?php echo $placeOfBirth; ?> </h2>
<h2>Here is a single lecturer at index 1 --  <?php echo $lecturers[1]; ?> </h2>




<!-- page.php be4 dynamic -->
<?php 

get_header();

while(have_posts()) {

        the_post(); ?>

        <h1>This is Page</h1>
        <h2>
           
            <?php 
              the_title();                  
            ?>
           </a>
        </h2> 
        <p><?php the_content(); ?> </p> 
          <a href="/"><button>back</button></a>           
      <?php 
}


get_footer();

?> 





<!-- 404 sample -->
<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'aria_label' => __( '404 not found', 'twentytwenty' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
