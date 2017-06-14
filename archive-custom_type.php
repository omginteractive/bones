<?php
/*
* CUSTOM POST TYPE ARCHIVE TEMPLATE
*
* This is the custom post type archive template. If you edit the custom post type name,
* you've got to change the name of this template to reflect that name change.
*
* For Example, if your custom post type is called "register_post_type( 'bookmarks')",
* then your template name should be archive-bookmarks.php
*
* For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

<section id="content" class="row">
    <div id="inner-content" class=col-md-12">
        <div class="row">
            <!-- Content Area -->
            <div class="col-md-9">
                <main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
                    <h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>

                    <?php if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" role="article">
                                <header class="article-header">
                                    <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="byline entry-meta vcard"><?php
                                        printf( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', get_the_time( 'Y-m-j' ), get_the_time( 'F jS, Y' ), get_author_posts_url( get_the_author_meta( 'ID' ) ));
                                        ?></p>
                                </header>

                                <section class="entry-content cf">
                                    <?php the_excerpt(); ?>
                                </section>

                                <footer class="article-footer">

                                </footer>
                            </article>
                        <?php endwhile; ?>

                        <?php bare_bones_page_navi(); ?>
                    <?php else : ?>
                        <article id="post-not-found" class="hentry">
                            <header class="article-header">
                                <h1><?php 'Oops, Post Not Found!'; ?></h1>
                            </header>
                            <section class="entry-content">
                                <p><?php 'Uh Oh. Something is missing. Try double checking things.'; ?></p>
                            </section>
                            <footer class="article-footer">
                                <p><?php 'This is the error message in the custom posty type archive template.'; ?></p>
                            </footer>
                        </article>
                    <?php endif; ?>
                </main>
            </div>

            <!-- Sidebar Area -->
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
