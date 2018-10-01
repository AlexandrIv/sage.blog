<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
->bindIf('config', function () {
    return new Config([
        'assets' => require dirname(__DIR__).'/config/assets.php',
        'theme' => require dirname(__DIR__).'/config/theme.php',
        'view' => require dirname(__DIR__).'/config/view.php',
    ]);
}, true);











if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
    'page_title'    => 'Theme General Settings',
    'menu_title'    => 'Theme Settings',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
));

   acf_add_options_page(array(
    'page_title'    => 'Theme General Settings',
    'menu_title'    => 'Theme Settings',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
));

   acf_add_options_sub_page(array(
    'page_title'    => 'Theme Header Settings',
    'menu_title'    => 'Header',
    'parent_slug'   => 'theme-general-settings',
));

   acf_add_options_sub_page(array(
    'page_title'    => 'Theme Footer Settings',
    'menu_title'    => 'Footer',
    'parent_slug'   => 'theme-general-settings',
));
}





function true_load_posts(){


    $arr = array();
    $value = get_field('choosing_a_course', 'option');
    foreach ($value as $myajax) {
        array_push($arr, $myajax->ID);
    }



    $posts = get_posts( array(
        'post_type' => 'Courses',
        'post_per_page' => -1,
        'post__not_in' => $arr,
    ) );

    foreach ($posts as $ajaxpost) {
        ?>
        <div class="col-md-4">
            <div class="courses-desc-box">
                <div class="top-box">
                    <?php echo get_the_post_thumbnail( $ajaxpost->ID ); ?>
                    <h3><?php echo $ajaxpost->post_title ?></h3>
                    <p><?php echo $ajaxpost->short_text ?></p>
                </div>
                <div class="bottom-box">
                    <ul>
                        <li>Time : <?php echo $ajaxpost->time ?></li>
                        <li><?php echo $ajaxpost->teacher ?></li>
                    </ul>
                    <a href="#">Join Now</a>
                </div>
            </div>
        </div>
        <?php
    }
    wp_die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');






function subscribes(){

    $myemail = $_POST['email'];

    if( email_exists($myemail) ){
     echo 'error'; 
 }
 else{
    echo 'succes';
}

$username = $myemail;
$email = $myemail;
$password = wp_generate_password();
$role = 'Subscriber';

$user_id = username_exists( $username );
if ( !$user_id && email_exists($email) == false ) {
    $user_id = wp_create_user( $username, $password, $email );
    if( !is_wp_error($user_id) ) {
        $user = get_user_by( 'id', $user_id );
        $user->add_role( $role );
    }
}
wp_die();
}




add_action('wp_ajax_subscribe', 'subscribes');
add_action('wp_ajax_nopriv_subscribe', 'subscribes');










function my_acf_init() {
    acf_update_setting('google_api_key', get_field('google_api_key', 'option'));
}
add_action('acf/init', 'my_acf_init');









show_admin_bar(false);




// function the_breadcrumb() {
//     if (!is_home()) {
//         echo '<a class="home" href="';
//         echo get_option('home');
//         echo '">';
//         bloginfo('name');
//         echo "</a> <span class='ampers'>></span> <span>ARCHIVE BY</span> ";
//         if (is_category() || is_single()) {
//             the_category('title_li=');
//             if (is_single()) {
//                 echo " Â» ";
//                 the_title();
//             }
//         } elseif (is_page()) {
//             echo the_title();
//         }
//         if()
//     }
// }

function the_breadcrumb() {

$sep = ' <span class="sep"> > </span> ';

    if (!is_front_page()) {

        echo '<a class="home" href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;

        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }

        if (is_single()) {
            echo $sep;
            the_title();
        }

        if (is_page()) {
            echo the_title();
        }

        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
    }
}







function mytheme_comment( $comment, $args, $depth ) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'div';
        $add_below = 'div-comment';
    }

    $classes = ' ' . comment_class( empty( $args['has_children'] ) ? '' : 'parent', null, null, false );
    ?>

    <<?php echo $tag, $classes; ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>

    <div class="comment-author-img">
        <?php  
        if ( $args['avatar_size'] != 0 ) {
            $argss = array(
                'height' => 60,
                'width' => 60,
            );
            echo get_avatar( $comment, $argss['avatar_size'] );
        } 
        ?>
    </div>

    <div class="comment-info">

        <div class="comment-author vcard">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/incon-user.png" alt="">

            <?php
            printf(
                __( '<cite class="fn">%s</cite> <span class="says"> &#8226 </span>' ),
                get_comment_author_link()
            );
            ?>
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                <?php
                printf(
                    __( '%1$s' ),
                    get_comment_date()
                ); ?>
            </a>
            <?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </div>
        <?php if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation">
                <?php _e( 'Your comment is awaiting moderation.' ); ?>
            </em><br/>
        <?php } ?>
        <div class="comment-text">
            <?php comment_text(); ?>
        </div>
        
        <div class="reply">
            <?php 
                comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])))
             ?>

        </div>
    </div>
    <?php if ( 'div' != $args['style'] ) { ?>
    </div>
<?php }
}

