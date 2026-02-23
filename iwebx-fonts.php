<?php
/**
 * Plugin Name: iwebx-fonts
 * Plugin URI:  https://www.iwebxstudio.com/
 * Description: ປລັກອິນປຽນຟອນພາສາລາວໃນເວີດແພຣດສ໌ (WordPress) ພັດທະນາໂດຍ iWebX Studio https://www.iwebxstudio.com/ ໂດຍການນໍາໃຊ້ຟອນ Lao Sans Pro
 * Author:      iWebX Studio
 * Version:     2.0.0
 * Author URI:  https://www.iwebxstudio.com
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Requires PHP: 8.0
 * Requires at least: 5.0
 * Text Domain: iwebx-fonts
 */

declare(strict_types=1);

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants
define( 'IWEBX_FONTS_VERSION', '2.0.0' );
define( 'IWEBX_FONTS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'IWEBX_FONTS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Enqueue the iWebX Fonts stylesheet on the front end.
 *
 * @return void
 */
function iwebx_fonts_enqueue_styles(): void {
    wp_enqueue_style(
        'iwebx-fonts-style',
        IWEBX_FONTS_PLUGIN_URL . 'iwebx-fonts-style.css',
        array(),
        IWEBX_FONTS_VERSION,
        'all'
    );
}
add_action( 'wp_enqueue_scripts', 'iwebx_fonts_enqueue_styles' );

/**
 * Optionally load the font in the block editor (Gutenberg) as well.
 *
 * @return void
 */
function iwebx_fonts_enqueue_editor_styles(): void {
    wp_enqueue_style(
        'iwebx-fonts-editor-style',
        IWEBX_FONTS_PLUGIN_URL . 'iwebx-fonts-style.css',
        array(),
        IWEBX_FONTS_VERSION,
        'all'
    );
}
add_action( 'enqueue_block_editor_assets', 'iwebx_fonts_enqueue_editor_styles' );
