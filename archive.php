<?php get_header(); ?>

<section id="content" class="row">
    <div id="inner-content" class="col-md-12">
        <div class="row">
            <!-- Content Area -->
            <div class="col-md-9">
                <main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                    <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>

                    <?php if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" role="article">
                                <header class="entry-header article-header">
                                    <h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="byline entry-meta vcard">
                                        <?php printf( 'Posted'.' %1$s %2$s',
                                            /* the time the post was published */
                                            '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                                            /* the author of the post */
                                            '<span class="by">'.'by'.'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                                        ); ?>
                                    </p>
                                </header>

                                <section class="entry-content cf">
                                    <?php the_post_thumbnail( 'bones-thumb-300' ); ?>
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
                                <h1><?php echo 'Oops, Post Not Found!'; ?></h1>
                            </header>
                            <section class="entry-content">
                                <p><?php echo 'Uh Oh. Something is missing. Try double checking things.'; ?></p>
                            </section>
                            <footer class="article-footer">
                                <p><?php echo 'This is the error message in the archive.php template.'; ?></p>
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
