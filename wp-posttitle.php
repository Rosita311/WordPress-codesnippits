/**
 * Output the post title.
 * [gpc_post_title]
 */
add_shortcode( 'gpc_post_title', 'gpc_post_title_func' );
function gpc_post_title_func() {
    return get_the_title();
}