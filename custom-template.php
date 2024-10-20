<?php
/**
 * Template Name: Blog Template
 * Description: A custom template to display blog posts.
 */
get_header();
?>

<h1>Latest Blog Posts</h1>

<?php
// The Query
$query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5));

// The Loop
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_excerpt(); ?></div>
        <a href="<?php the_permalink(); ?>">Read More</a>
        <hr>
        <?php
    }
    wp_reset_postdata(); // Restore original Post Data
} else {
    echo '<p>No posts found.</p>';
}

get_footer();
?>
