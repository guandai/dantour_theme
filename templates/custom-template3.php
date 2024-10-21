<?php
/*
Template Name: Custom Template3
*/

get_header(); // Include the header

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        // Start the loop
        while ( have_posts() ) :
            the_post(); // Set up the post data
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php
                    the_content(); // Display the content of the page
                    ?>
                </div>
            </article>
        <?php
        endwhile; // End of the loop
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar(); // Optional: Include the sidebar if you want
get_footer(); // Include the footer
?>
