<?php get_header() ?>

<main id="main" class="site-main" role="main">
    <div class="container">
        <h1 class="title title--page">Search results for: <span class="underline--custom"><?php the_search_query() ?></span></h1>
        <?php get_template_part('template-parts/post-list'); ?>
    </div>
</main>

<?php get_footer() ?>
