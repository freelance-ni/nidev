<?php
/* Template Name: Template Home */

get_header();
?>

<section class="section section--intro">
    <div class="container">
        <div class="col-wrapper clearfix">
            <div class="col--50">
                <div class="text">
                    <h1>About.</h1>
                    <h4></h4>
                </div>
            </div>
            <div class="col--50">
                <div class="text">
                    <p>From NI, currently a Front-End Developer for one of NE's most prestigious digital agencies - working with a development team of 2 Designers, 3 Front-End and 3 Back-End Developers to deliver a wide range of web services.</p>
                    <p>Main languages used on a day-to-day basis consist of HTML5, SCSS, jQuery/JS and basic PHP.</p>

                    <p>Currently looking to expand my portfolio to help professionals that require a small, brochure style site. Using WordPress, I aim to give the client 99% control over their content, layouts and images.</p>
                    <p>Sites suitable for Architects, Coffee Shops, Restaurants, Pubs, Builders, Plumbers, Blacksmiths, Portfolios, Home Removals & more.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

if( have_rows('layouts') ):

    while ( have_rows('layouts') ) : the_row();
?>

<?php

    if( get_row_layout() == 'featured_posts' ):
        $padding = get_sub_field('padding');
        $posts = get_sub_field('posts');
?>

        <section class="section section--portfolio <?php echo ($padding) ? $padding : 'no-top-padding'; ?> bg--white">
            <div class="container">
                <div class="col-wrapper clearfix">
            <?php foreach( $posts as $p ):
                $link = get_permalink( $p->ID );
                $image = get_the_post_thumbnail_url( $p->ID, 'full-bleed');
                $logo_type = get_field('logo_type', $p->ID);
                $logo_svg = get_field('logo_svg', $p->ID);
                $logo_png = get_field('logo_png', $p->ID);
                ?>
                    <div class="portfolio-item col--100">
                    <a href="<?php echo $link ?>">
                        <div class="image-wrapper">
                            <div class="image bg--cover" style="background-image: url('<?php echo $image; ?>');">
                            </div>
                            <div class="logo">
                                <?php
                                if($logo_svg) :
                                    echo $logo_svg;
                                else :
                                    echo '<img src="' . $logo_png['url'] . '" />';
                                endif;
                                ?>
                            </div>
                        </div>
                    </a>
                </div>

            <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php
    endif;
    ?>

<?php

    endwhile;

endif;
?>

<?php /*
<section class="section section--cta">
    <div class="container">
        <div class="col-wrapper clearfix">
            <div class="col--50">
                <div class="col-inner">
                    <div class="text">
                        <!-- <h4>View Portfolio</h4> -->
                    </div>
                </div>
            </div>
            <div class="col--50">
                <div class="col-inner">
                    <div class="text">
                        <!-- <h4>Get in touch</h4> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
*/ ?>

<?php
get_footer();