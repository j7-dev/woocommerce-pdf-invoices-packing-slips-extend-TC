<?php
/**
 * Plugin Name:       PDF Invoices & Packing Slips for WooCommerce extend TC | 繁體中文擴展外掛
 * Plugin URI:        https://github.com/j7-dev/woocommerce-pdf-invoices-packing-slips-extend-TC
 * Description:       這是一個基於 woocommerce-pdf-invoices-packing-slips 繁中擴展外掛，解決了 woocommerce-pdf-invoices-packing-slips 的 invoice PDF 無法正確顯示繁體中文的問題。
 * Version:           0.0.4
 * Requires at least: 5.7
 * Requires PHP:      8.0
 * Author:            J7
 * Author URI:        https://github.com/j7-dev
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       woocommerce_pdf_invoices_packing_slips_extend_TC
 * Domain Path:       /languages
 * Tags: woocommerce_pdf_invoices_packing_slips
 */

declare (strict_types = 1);

namespace J7\Woocommerce_Pdf_Invoices_Packing_Slips_Extend_TC;

if ( ! \class_exists( 'J7\Woocommerce_Pdf_Invoices_Packing_Slips_Extend_TC\Plugin' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';

	/**
		* Class Plugin
		*/
	final class Plugin {
		use \J7\WpUtils\Traits\PluginTrait;
		use \J7\WpUtils\Traits\SingletonTrait;

		/**
		 * Constructor
		 */
		public function __construct() {
			require_once __DIR__ . '/inc/class/class-bootstrap.php';

			$this->required_plugins = array(
				array(
					'name'     => 'WooCommerce',
					'slug'     => 'woocommerce',
					'required' => true,
					'version'  => '8.0.0',
				),
				array(
					'name'     => 'PDF Invoices & Packing Slips for WooCommerce',
					'slug'     => 'woocommerce-pdf-invoices-packing-slips',
					'required' => true,
					'version'  => '3.8.0',
				),
			);

			$this->init(
				[
					'app_name'    => 'woocommerce-pdf-invoices-packing-slips-extend-TC',
					'github_repo' => 'https://github.com/j7-dev/woocommerce-pdf-invoices-packing-slips-extend-TC',
					'callback'    => [ '\J7\Woocommerce_Pdf_Invoices_Packing_Slips_Extend_TC\Bootstrap', 'instance' ],
				]
			);
		}
	}
	Plugin::instance();
}
