<?php
/* Template Name: Custom Homepage */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- Add your custom content here -->
        <h1>Welcome to My Custom Homepage</h1>
        <p>Display your desired content here.</p>
        <?php
        // You can include a specific template part or the main loop
        get_template_part('template-parts/content', 'home'); // Customize as needed
        ?>
    </main>
</div>

<?php
get_sidebar(); // Optional, if you want a sidebar
get_footer();
