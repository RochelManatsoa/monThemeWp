<?php

function montheme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Menu pied de page');
}

function montheme_register_script()
{
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function montheme_wp_get_document_title($title)
{
    unset($title['tagline']);
    return $title;
}

function montheme_pagination()
{
    $pages = paginate_links(['type' => 'array']);
    if($pages === null){
        return;
    }
    echo '<nav aria-label="Page navigation example">';
    echo '<ul class="pagination">';
    foreach($pages as $page){
        $active = strpos($page, 'current') !== false;
        $class = 'page-item';
        if($active){
            $class .= ' active';
        }
        echo ' <li class="' .$class. '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo ' </li>';
    }
    echo '</ul>';
    echo '</nav>';
}


add_action('after_setup_theme', 'montheme_support');
add_action('wp_enqueue_scripts', 'montheme_register_script');
add_filter('document_title_parts', 'montheme_wp_get_document_title');
