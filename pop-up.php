<?php
/*
Plugin Name: Zinkx Popup Image Plugin
Description: Sitedeki tüm sayfalarda belirli bir süre gösterilecek pop-up resmi.
Version: 1.1 Alpha
Author: [Dev Technic]
*/

// Frontend için gerekli script ve stil dosyalarını ekle
function popup_image_enqueue_scripts() {
    wp_enqueue_style('popup-image-style', plugins_url('style.css', __FILE__));
    wp_enqueue_script('popup-image-script', plugins_url('popup.js', __FILE__), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'popup_image_enqueue_scripts');

// Pop-up HTML kodunu sayfaya ekle
function popup_image_display() {
    ?>
    <div id="popup-image-container">
        <div id="popup-overlay"></div>
        <div id="popup-image">
            <img src="<?php echo plugins_url('popup-image.jpg', __FILE__); ?>" alt="Popup Image">
            <button id="popup-close-btn">&times;</button>
        </div>
    </div>
    <?php
}
add_action('wp_footer', 'popup_image_display');
