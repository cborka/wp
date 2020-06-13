<div class="grid-container">

    <?php get_header("page"); ?>

    <main>
        <section id="intro">
            <div>Архив</div>
        </section>


        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
                the_archive_title( '<h1 class="">', '</h1>' );
                the_archive_description( '<div class="">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
            the_author();
                the_title();
                echo get_the_date();
                the_time();
                the_content();
                get_template_part( 'template-parts/content', get_post_type() );

            endwhile;

            the_posts_navigation();

        else :
            echo 'else';
            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>


    </main>



    <?php get_sidebar("right"); ?>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>

</div>
