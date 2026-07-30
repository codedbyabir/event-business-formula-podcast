<?php
/**
 * Template for single Podcast posts.
 *
 * @package EventBusinessFormula
 */

get_header();

$author_id = get_post_field('post_author', get_the_ID());
$facebook_url = get_the_author_meta('facebook', $author_id);
$x_url = get_the_author_meta('x', $author_id);

?>

<div class="ebfp-podcast-single-page-area">
    <div class="ebfp-podcast-single-page">
        <!-- Podcast Heading -->
        <div class="ebfp-podcast-single-heading">
            <h2 class="ebfp-podcast-title"><?php the_title(); ?></h2>
        </div><!--/ Podcast Heading -->
        <div class="ebfp-container">
            <!-- Podcast Info -->
            <div class="ebfp-podcast-single-info">
                <div class="ebfp-podcast-author">
                    <div class="ebfp-author-image">
                        <?php echo get_avatar($author_id, 100); ?>
                    </div>
                    <div class="ebfp-author-name">By
                        <a>
                            <?php echo esc_html(get_the_author_meta('display_name', $author_id)); ?>
                        </a>
                    </div>
                </div>
                <div class="ebfp-podcast-date">
                    <?php echo get_the_date('F j, Y'); ?>
                </div>
            </div><!--/ Podcast Info -->

            <!-- Podcast Thumbnail -->
            <div class="ebfp-podcast-thumbnail">
                <?php if (has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div><!--/ Podcast Thumbnail -->
            <!-- Podcast Share Buttons -->
            <div class="ebfp-podcast-share-buttons">
                <!--Single Share Button-->
                <div class="ebfp-podcast-single-share-icon">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                        target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ebfp-facebook" viewBox="0 0 16 28">
                            <path
                                d="M14.984 0.187v4.125h-2.453q-1.344 0-1.813 0.562t-0.469 1.687v2.953h4.578l-0.609 4.625h-3.969v11.859h-4.781v-11.859h-3.984v-4.625h3.984v-3.406q0-2.906 1.625-4.508t4.328-1.602q2.297 0 3.563 0.187z">
                            </path>
                        </svg> Share
                    </a>
                </div> <!--/ Single Share Button-->

                <!--Single Share Button-->
                <div class="ebfp-podcast-single-share-icon ebfp-twitter-icon">
                    <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>&url=<?php echo urlencode(get_permalink()); ?>"
                        target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ebfp-twitter" viewBox="0 0 26 28">
                            <path
                                d="M25.312 6.375q-1.047 1.531-2.531 2.609 0.016 0.219 0.016 0.656 0 2.031-0.594 4.055t-1.805 3.883-2.883 3.289-4.031 2.281-5.047 0.852q-4.234 0-7.75-2.266 0.547 0.063 1.219 0.063 3.516 0 6.266-2.156-1.641-0.031-2.938-1.008t-1.781-2.492q0.516 0.078 0.953 0.078 0.672 0 1.328-0.172-1.75-0.359-2.898-1.742t-1.148-3.211v-0.063q1.062 0.594 2.281 0.641-1.031-0.688-1.641-1.797t-0.609-2.406q0-1.375 0.688-2.547 1.891 2.328 4.602 3.727t5.805 1.555q-0.125-0.594-0.125-1.156 0-2.094 1.477-3.57t3.57-1.477q2.188 0 3.687 1.594 1.703-0.328 3.203-1.219-0.578 1.797-2.219 2.781 1.453-0.156 2.906-0.781z">
                            </path>
                        </svg>Tweet
                    </a>
                </div> <!--/ Single Share Button-->

                <!--Single Share Button-->
                <div class="ebfp-podcast-single-share-icon ebfp-pinterest-icon">
                    <a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>&media=<?php echo urlencode(get_the_post_thumbnail_url()); ?>&description=<?php echo urlencode(get_the_title()); ?>"
                        target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ebfp-pinterest" viewBox="0 0 32 32">
                            <path
                                d="M16 0c-8.837 0-16 7.163-16 16 0 6.778 4.217 12.568 10.169 14.899-0.14-1.266-0.266-3.208 0.055-4.59 0.291-1.249 1.876-7.953 1.876-7.953s-0.479-0.958-0.479-2.375c0-2.225 1.29-3.886 2.895-3.886 1.365 0 2.024 1.025 2.024 2.254 0 1.373-0.874 3.425-1.325 5.327-0.377 1.593 0.799 2.892 2.369 2.892 2.844 0 5.030-2.999 5.030-7.327 0-3.831-2.753-6.509-6.683-6.509-4.552 0-7.225 3.415-7.225 6.943 0 1.375 0.53 2.85 1.191 3.651 0.131 0.158 0.15 0.297 0.111 0.459-0.121 0.506-0.391 1.593-0.444 1.815-0.070 0.293-0.232 0.355-0.535 0.214-1.998-0.93-3.248-3.852-3.248-6.198 0-5.047 3.667-9.682 10.572-9.682 5.55 0 9.864 3.955 9.864 9.241 0 5.514-3.477 9.952-8.302 9.952-1.621 0-3.145-0.842-3.667-1.837 0 0-0.802 3.055-0.997 3.803-0.361 1.39-1.337 3.132-1.989 4.195 1.497 0.463 3.088 0.713 4.738 0.713 8.836-0 16-7.163 16-16s-7.163-16-16-16z">
                            </path>
                        </svg> Pin
                    </a>
                </div> <!--/ Single Share Button-->
            </div><!--/ Podcast Share Buttons -->

            <!-- Podcast Player -->
            <div class="ebfp-podcast-player">
                <?php
                // Retrieve the iframe code from the post meta
                $iframe_code = get_post_meta(get_the_ID(), '_ebfp_podcast_iframe_code', true);

                // Define allowed HTML tags and attributes
                $allowed_html = [
                    'iframe' => [
                        'style' => [],
                        'title' => [],
                        'src' => [],
                        'width' => [],
                        'height' => [],
                        'scrolling' => [],
                        'allowfullscreen' => [],
                    ],
                ];

                // Output the iframe code, sanitized with wp_kses
                if (!empty($iframe_code)) {
                    echo wp_kses($iframe_code, $allowed_html);
                } else {
                    echo '<p>' . esc_html__('No embed code available for this podcast.', 'event-business-formula') . '</p>';
                }
                ?>

            </div><!--/ Podcast Player -->

            <!-- Podcast Summary -->
                <?php
                $podcast_summary = get_post_meta(get_the_ID(), '_ebfp_podcast_summary', true);

                if (!empty($podcast_summary)) :
                ?>
                <div class="ebfp-podcast-summary">
                    <h3 class="ebfp-podcast-summary__heading"><?php esc_html_e('Summary', 'event-business-formula'); ?></h3>
                    <div class="ebfp-podcast-summary__content">
                        <?php echo wpautop(esc_html($podcast_summary)); ?>
                    </div>
                </div>
                <?php
                endif;
                ?>
            <!-- Podcast Content -->
            <div class="ebfp-podcast-content">
                <?php the_content(); ?>
            </div><!--/ Podcast Content -->

            <!--Podcast Author -->
            <div class="ebfp-podcast-footer-author-area">
                <div class="ebfp-podcast-footer-author">
                    <div class="ebfp-podcast-author-image">
                        <?php echo get_avatar($author_id, 180); ?>
                        <div class="ebfp-podcast-author-social">
                            <?php if ($facebook_url): ?>
                                <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer">
                                    <svg class="ebfp-facebook" version="1.1" id="fi_20837"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 155.139 155.139"
                                        style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve">
                                        <g>
                                            <path id="f_1_" style="fill:#010002;" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
        c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
        v20.341H37.29v27.585h23.814v70.761H89.584z"></path>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                </a>
                            <?php endif; ?>
                            <?php if ($x_url): ?>
                                <a href="<?php echo esc_url($x_url); ?>" target="_blank" rel="noopener noreferrer">
                                    <svg id="fi_5969020" enable-background="new 0 0 1227 1227" viewBox="0 0 1227 1227"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m613.5 0c-338.815 0-613.5 274.685-613.5 613.5s274.685 613.5 613.5 613.5 613.5-274.685 613.5-613.5-274.685-613.5-613.5-613.5z">
                                            </path>
                                            <path
                                                d="m680.617 557.98 262.632-305.288h-62.235l-228.044 265.078-182.137-265.078h-210.074l275.427 400.844-275.427 320.142h62.239l240.82-279.931 192.35 279.931h210.074l-285.641-415.698zm-335.194-258.435h95.595l440.024 629.411h-95.595z"
                                                fill="#fff"></path>
                                        </g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                    </svg>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="ebfp-podcast-author-details">
                        <div class="ebfp-podcast-author-name">
                            <h4>About the author</h4>
                            <h2><?php echo esc_html(get_the_author_meta('display_name', $author_id)); ?></h2>
                        </div>
                        <div class="ebfp-podcast-author-description">
                            <p><?php echo get_the_author_meta('description', $author_id); ?></p>
                        </div>
                    </div>
                </div>
            </div><!--/ Podcast Author -->
        </div>
    </div>
</div>

<?php get_footer(); ?>