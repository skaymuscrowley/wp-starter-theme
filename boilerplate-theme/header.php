<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php
        echo '<title>';
        if (function_exists('is_tag') && is_tag()) { 
            echo 'Tag Archive for &quot;'.$tag.'&quot; - '; 
        } elseif (is_archive()) { 
            wp_title(''); echo ' Archive - '; 
        } elseif (is_search()) { 
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 
        } elseif (!(is_404()) && (is_single()) || (is_page())) { 
            wp_title(''); echo ' - '; 
        } elseif (is_404()) {
            echo 'Not Found - '; 
        }
        bloginfo('name'); 
        echo '</title>';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fafafa">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- WordPress Head -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>