<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }


    public function slideshow(){
        return get_field('slideshow', 'option');
    }


    

    public static function slideshow_time(){
        return get_field("slideshow_time", "option");
    }

    public static function slideshow_opacity(){
        return get_field('slideopacity', 'option');
    }






    public static function education_image(){
        return get_field('education', 'option')['education_image'];
    }

    public static function education_title(){
        return get_field('education', 'option')['education_setting']['education_title'];
    }

    public static function education_text(){
        return get_field('education', 'option')['education_setting']['education_text'];
    }






    public static function image_1(){
        return get_field('education', 'option')['education_setting']['image_1'];
    }
    public static function text_image_1(){
        return get_field('education', 'option')['education_setting']['text_image_1'];
    }

    public static function image_2(){
        return get_field('education', 'option')['education_setting']['image_2'];
    }
    public static function text_image_2(){
        return get_field('education', 'option')['education_setting']['text_image_2'];
    }

    public static function image_3(){
        return get_field('education', 'option')['education_setting']['image_3'];
    }
    public static function text_image_3(){
        return get_field('education', 'option')['education_setting']['text_image_3'];
    }





    public static function features_title(){
        return get_field('features_title', 'option');
    }
    public static function posts_to_display(){
        return get_field('posts_to_display', 'option');
    }



    public static function postcourses(){
        return get_field('choosing_a_course', 'option');
    }
   
    public static function teachers(){
        return get_field('select_teachers_to_display', 'option');
    }

    public static function transition_time(){
        return get_field('transition_time', 'option');
    }

    public static function clients(){
        return get_field('clients', 'option');
    }

    public static function contact_map(){
        return get_field('map', 'option');
    }

    public static function api_key(){
        return get_field('google_api_key', 'option');
    }
    
    public static function email(){
        return get_field('email', 'option');
    }
    public static function phone(){
        return get_field('phone', 'option');
    }

    public static function map_blog_page(){
        return get_field('map_blog_page', get_the_ID(), 'option');
    }

    public static function contact_page_info(){
        return get_field('contact_page_info', get_the_ID(), 'option');
    }

    public static function contact_page_adress(){
        return get_field('contact_page_adress', get_the_ID(), 'option');
    }

    public static function contact_7_shortcode(){
        return get_field('contact_7_shortcode', get_the_ID(), 'option');
    }

  
    
}
