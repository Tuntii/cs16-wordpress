<?php
/**
 * functions.php
 * CS16 Retro Theme Functions
 */

/**
 * 1) TEMAYA DESTEK EKLEMEK (Logo, Arkaplan, vs.)
 */
function cs16theme_setup() {
    add_theme_support('title-tag'); // <title> kontrolünü WP'ye bırakır
    add_theme_support('post-thumbnails'); // Öne çıkarılmış görsel desteği
    add_theme_support('automatic-feed-links'); // RSS feed linklerini ekler
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 80,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    add_theme_support('custom-background', [
        'default-color' => '222222',  // #222222
    ]);


    register_nav_menus([
        'header-menu' => __('Üst Kısım Menü', 'cs16theme'),
        'footer-menu' => __('Alt Kısım Menü', 'cs16theme'),
    ]);
}
add_action('after_setup_theme', 'cs16theme_setup');


function cs16theme_enqueue_styles() {

    wp_enqueue_style('cs16theme-style', get_stylesheet_uri());
    wp_enqueue_style(
        'cs16theme-cs16', 
        get_stylesheet_directory_uri() . '/assets/css/cs16-custom.css', 
        array(), 
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'cs16theme_enqueue_styles');

function cs16theme() {

    wp_enqueue_style('cs16theme-style', get_stylesheet_uri());

    wp_enqueue_style(
        'style-css', 
        get_stylesheet_directory_uri() . 'style.css', 
        array(), 
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'cs16theme');


function cs16theme_customize_register($wp_customize) {

    // 3.1) Yeni bir Section (Bölüm) ekle
    $wp_customize->add_section('cs16theme_color_section', [
        'title'       => __('Tema Renk Seçimi', 'cs16theme'),
        'description' => __('cs16.css teması için renk ayarlarını buradan yapabilirsin.', 'cs16theme'),
        'priority'    => 30,
    ]);

    // 3.2) Arka plan rengi için Ayar (Setting)
    $wp_customize->add_setting('cs16theme_bg_color', [
        'default'   => '#4a5942',  // cs16.css'in varsayılan arkaplanı
        'transport' => 'refresh',  // 'postMessage' yerine 'refresh'
    ]);

    // 3.3) Arka plan rengi için Kontrol (Color Picker)
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'cs16theme_bg_color_control',
            [
                'label'    => __('Arka Plan Rengi', 'cs16theme'),
                'section'  => 'cs16theme_color_section',
                'settings' => 'cs16theme_bg_color',
            ]
        )
    );

    $wp_customize->add_setting('cs16theme_heading_color', [
        'default'   => '#c4b550',  
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'cs16theme_heading_color_control',
            [
                'label'    => __('Başlık Rengi', 'cs16theme'),
                'section'  => 'cs16theme_color_section',
                'settings' => 'cs16theme_heading_color',
            ]
        )
    );
}
add_action('customize_register', 'cs16theme_customize_register');


function cs16theme_customizer_inline_css() {
    // get_theme_mod(parametre, varsayılan_değer)
    $bg_color      = get_theme_mod('cs16theme_bg_color', '#4a5942');
    $heading_color = get_theme_mod('cs16theme_heading_color', '#c4b550');
    ?>
    <style type="text/css">
      :root {
        --bg: <?php echo esc_attr($bg_color); ?>;
        --accent: <?php echo esc_attr($heading_color); ?>;
      }
      h1, h2, h3, h4, h5, h6, .cs-title {
        color: var(--accent) !important;
      }
    </style>
    <?php
}
add_action('wp_head', 'cs16theme_customizer_inline_css');
