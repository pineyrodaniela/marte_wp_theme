<?php
function test_customize_register( $wp_customize )
{

    $wp_customize->add_setting( 'test_images' , array(
        'default'     => 'Images/logo.png',
    ));

        $wp_customize->add_section( 'test_image' , array(
		'title'      => __('Logo','my_test'),
		'description'   => 'Modify the theme Logotype'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'test_images', array(
		'label'      => __( 'Upload Logo', 'mytheme' ),
		'section'    => 'test_image',
		'settings'   => 'test_images'
	)));

//Main Color Settings

    $wp_customize->add_setting( 'test_links' , array(
        'default'     => '#DF0174',
    ));

        $wp_customize->add_section( 'test_link' , array(
		'title'      => __('Main Theme color','my_test'),
		'description'   => 'Change the main color of the Theme'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_links', array(
		'label'      => __( 'Choose color', 'mytheme' ),
		'section'    => 'test_link',
		'settings'   => 'test_links'
	)));
	
//Link Settings when hover

    $wp_customize->add_setting( 'test_links_hover' , array(
        'default'     => '#000',
    ));

        $wp_customize->add_section( 'test_link_hover' , array(
		'title'      => __('Hover Link color','my_test'),
		'description'   => 'When you hover on a link, it changes its color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_links_hover', array(
		'label'      => __( 'Choose it here', 'mytheme' ),
		'section'    => 'test_link_hover',
		'settings'   => 'test_links_hover'
	)));

//Post Title Background Color settings

    $wp_customize->add_setting( 'test_post_title_background_colors' , array(
        'default'=>'#000',
    ));

        $wp_customize->add_section( 'test_post_title_background_color' , array(
		'title'      => __('Post Title Background Color','my_test'),
		'description'   => 'When you hover on a blog entry title, it changes its background color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_post_title_background_colors', array(
		'label'      => __( 'Change color', 'mytheme' ),
		'section'    => 'test_post_title_background_color',
		'settings'   => 'test_post_title_background_colors'
	)));

	
//Post Title Color settings

    $wp_customize->add_setting( 'test_post_title_normal_colors' , array(
        'default'=>'#000',
    ));

        $wp_customize->add_section( 'test_post_title_normal_color' , array(
		'title'      => __('Post title Color','my_test'),
		'description'   => 'Change the main color of the entry titles'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_post_title_normal_colors', array(
		'label'      => __( 'Change color', 'mytheme' ),
		'section'    => 'test_post_title_normal_color',
		'settings'   => 'test_post_title_normal_colors'
	)));
	
//Post title color when hover

    $wp_customize->add_setting( 'test_headers' , array(
        'default'=>'#DF0174',
    ));

        $wp_customize->add_section( 'test_header' , array(
		'title'      => __('Post Title color when hover','my_test'),
		'description'   => 'When you hover on a blog entry, it changes its color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_headers', array(
		'label'      => __( 'Choose', 'mytheme' ),
		'section'    => 'test_header',
		'settings'   => 'test_headers'
	)));

//Footer Img

    $wp_customize->add_setting( 'test_footers' , array(
        'default'=>'Images/footer.png',
    ));

        $wp_customize->add_section( 'test_footer' , array(
		'title'      => __('Footer Background','my_test'),
		'description'   => 'Upload a footer Image for the theme'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'test_footers', array(
		'label'      => __( 'Browse', 'mytheme' ),
		'section'    => 'test_footer',
		'settings'   => 'test_footers'
	)));

//Header Img

    $wp_customize->add_setting( 'test_header_images' , array(
        'default'=>'Images/header.png',
    ));

        $wp_customize->add_section( 'test_header_image' , array(
		'title'      => __('Header','my_test'),
		'description'   => 'Upload a Heading for the theme'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'test_header_images', array(
		'label'      => __( 'Browse', 'mytheme' ),
		'section'    => 'test_header_image',
		'settings'   => 'test_header_images'
	)));

//Logo Background

    $wp_customize->add_setting( 'test_logo_background_colors' , array(
        'default'=>'#000',
    ));

        $wp_customize->add_section( 'test_logo_background_color' , array(
		'title'      => __('Logo Background color','my_test'),
		'description'   => 'Pick a color for the logo background'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_logo_background_colors', array(
		'label'      => __( 'Pick', 'mytheme' ),
		'section'    => 'test_logo_background_color',
		'settings'   => 'test_logo_background_colors'
	)));

//Description Background

    $wp_customize->add_setting( 'test_description_backgrounds' , array(
        'default'=>'#0a0a0a',
    ));

        $wp_customize->add_section( 'test_description_background' , array(
		'title'      => __('Description background Color','my_test'),
		'description'   => 'Pick a color for the Description background'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_description_backgrounds', array(
		'label'      => __( 'Pick', 'mytheme' ),
		'section'    => 'test_description_background',
		'settings'   => 'test_description_backgrounds'
	)));

//Description Color

    $wp_customize->add_setting( 'test_description_colors' , array(
        'default'=>'#F2F2F2',
    ));

        $wp_customize->add_section( 'test_description_color' , array(
		'title'      => __('Description text Color','my_test'),
		'description'   => 'Pick a color for the Description text'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_description_colors', array(
		'label'      => __( 'Pick', 'mytheme' ),
		'section'    => 'test_description_color',
		'settings'   => 'test_description_colors'
	)));

//Body Background Color

    $wp_customize->add_setting( 'test_body_background_colors' , array(
        'default'=>'#000',
    ));

        $wp_customize->add_section( 'test_body_background_color' , array(
		'title'      => __('Body background color','my_test'),
		'description'   => 'Pick a color for the main body'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_body_background_colors', array(
		'label'      => __( 'Pick', 'mytheme' ),
		'section'    => 'test_body_background_color',
		'settings'   => 'test_body_background_colors'
	)));
	
}
add_action( 'customize_register', 'test_customize_register' );

?>

<?php
function test_customize_css() {

        if ( get_theme_mod( 'test_body_background_colors' ) ) {
        ?>
            <style type="text/css">
                body {
                    background-color: <?php echo get_theme_mod('test_body_background_colors'); ?>
                }
            </style>
        <?php
    }

    
    if ( get_theme_mod( 'test_links' ) ) {
        ?>
            <style type="text/css">
                a {
                    color: <?php echo get_theme_mod('test_links'); ?>
                }
                
                #underheader {               
                background-color: <?php echo get_theme_mod('test_links'); ?>                
                }
                
            </style>
        <?php
    }
    
        if ( get_theme_mod( 'test_links_hover' ) ) {
        ?>
            <style type="text/css">
                a:hover {
                    color: <?php echo get_theme_mod('test_links_hover'); ?>
                }
            </style>
        <?php
    }

 
                if ( get_theme_mod( 'test_post_title_background_colors' ) ) {
        ?>
            <style type="text/css">
                #contentmiddle h1 a:hover {
                    background-color: <?php echo get_theme_mod('test_post_title_background_colors'); ?>
                }
            </style>
        <?php
    }
    
                    if ( get_theme_mod( 'test_post_title_normal_colors' ) ) {
        ?>
            <style type="text/css">
                #contentmiddle h1 a {
                    color: <?php echo get_theme_mod('test_post_title_normal_colors'); ?>
                }
                
                #contentmiddle h1 {
                    color: <?php echo get_theme_mod('test_post_title_normal_colors'); ?>
                }
                
            </style>
        <?php
    }
    
                    if ( get_theme_mod( 'test_headers' ) ) {
        ?>
            <style type="text/css">
                #contentmiddle h1 a:hover {
                    color: <?php echo get_theme_mod('test_headers'); ?>
                }
            </style>
        <?php
    }
    
                if ( get_theme_mod( 'test_header_images' ) ) {
        ?>
            <style type="text/css">
                #latestposts {
                    background-image: url("<?php echo get_theme_mod('test_header_images'); ?>"); 
                }
            </style>
        <?php
    }
    
                   if ( get_theme_mod( 'test_footers' ) ) {
        ?>
            <style type="text/css">
                #navigationposition {
                    background-image: url("<?php echo get_theme_mod('test_footers'); ?>"); 
                }
            </style>
        <?php
    }
    
                          if ( get_theme_mod( 'test_logo_background_colors' ) ) {
        ?>
            <style type="text/css">
                #logoheader {
                    background-color: <?php echo get_theme_mod('test_logo_background_colors'); ?>
                }
            </style>
        <?php
    }

                          if ( get_theme_mod( 'test_description_backgrounds' ) ) {
        ?>
            <style type="text/css">
                #browse {
                    background-color: <?php echo get_theme_mod('test_description_backgrounds'); ?>
                }
            </style>
        <?php
    }

                          if ( get_theme_mod( 'test_description_colors' ) ) {
        ?>
            <style type="text/css">
                #browse {
                    color: <?php echo get_theme_mod('test_description_colors'); ?>
                }
            </style>
        <?php
    }

}

add_action( 'wp_head', 'test_customize_css');
?>

<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name'=>'Right Sidebar',
		'before_widget' => '<div id="%1$s" class="side %2$s">', // Removes <li>
		'after_widget' => '</div>', // Removes </li>
	));

function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )

        return;

    global $wp_query;


    /** Stop execution if there's only 1 page */

    if( $wp_query->max_num_pages <= 1 )

        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

    $max   = intval( $wp_query->max_num_pages );


    /** Add current page to the array */

    if ( $paged >= 1 )

        $links[] = $paged;

 

    /** Add the pages around the current page to the array */

    if ( $paged >= 3 ) {

        $links[] = $paged - 1;

        $links[] = $paged - 2;

    }

 

    if ( ( $paged + 2 ) <= $max ) {

        $links[] = $paged + 2;

        $links[] = $paged + 1;

    }

 

    echo '<div class="navigation"><ul>' . "\n";

 

    /** Previous Post Link */

    if ( get_previous_posts_link() )

        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

 

    /** Link to first page, plus ellipses if necessary */

    if ( ! in_array( 1, $links ) ) {

        $class = 1 == $paged ? ' class="active"' : '';

 

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

 

        if ( ! in_array( 2, $links ) )

            echo '<li>…</li>';

    }

 

    /** Link to current page, plus 2 pages in either direction if necessary */

    sort( $links );

    foreach ( (array) $links as $link ) {

        $class = $paged == $link ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );

    }

 

    /** Link to last page, plus ellipses if necessary */

    if ( ! in_array( $max, $links ) ) {

        if ( ! in_array( $max - 1, $links ) )

            echo '<li>…</li>' . "\n";

 

        $class = $paged == $max ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );

    }

 

    /** Next Post Link */

    if ( get_next_posts_link() )

        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";
}

?>

<?php

add_theme_support( 'menus' );

?>

<?php show_admin_bar( $bool ); ?>