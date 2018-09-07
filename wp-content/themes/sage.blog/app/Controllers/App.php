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


   
    
}
